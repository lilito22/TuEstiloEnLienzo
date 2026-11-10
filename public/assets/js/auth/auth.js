/**
 * Lógica de autenticación (login) — adaptada del archivo del instructor
 * al proyecto MVC TuEstiloEnLienzo.
 *
 * Adaptaciones:
 *  - Rutas con APP_BASE_PATH (el proyecto corre en una subcarpeta de XAMPP).
 *  - Tras el login, el access_token se envía a PHP (/auth/session) para que
 *    el servidor lo valide con Supabase y cree la sesión del lado del servidor.
 *  - Validación de campos y mensajes de error en español.
 *
 * Expone window.AppAuth para que guard.js lo reutilice.
 */
(function () {
  const $ = (sel) => document.querySelector(sel);
  const BASE = window.APP_BASE_PATH || "";
  const RUTA_LOGIN = BASE + "/login";
  const RUTA_INICIO = BASE + "/";
  const REGEX_EMAIL = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  /** Envía el token a PHP. Devuelve { ok, mensaje }. */
  async function syncServerSession(session) {
    if (!session?.access_token) return { ok: false, mensaje: "No hay token de sesión." };
    try {
      const resp = await fetch(BASE + "/auth/session", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        credentials: "same-origin",
        body: JSON.stringify({ access_token: session.access_token }),
      });
      let datos = {};
      try {
        datos = await resp.json();
      } catch {
        datos = { mensaje: `Respuesta inesperada del servidor (HTTP ${resp.status} en ${resp.url}).` };
      }
      return { ok: resp.ok, mensaje: datos.mensaje };
    } catch (e) {
      return { ok: false, mensaje: "No se pudo contactar al servidor PHP: " + e.message };
    }
  }

  async function logout() {
    try {
      await window.supabaseClient?.auth.signOut();
    } finally {
      await fetch(BASE + "/auth/logout", { method: "POST", credentials: "same-origin" });
      window.location.href = RUTA_LOGIN;
    }
  }

  function traducirError(error) {
    const msg = (error?.message || "").toLowerCase();
    if (msg.includes("invalid login credentials")) return "Correo o contraseña incorrectos.";
    if (msg.includes("email not confirmed")) return "Debes confirmar tu correo antes de ingresar.";
    if (msg.includes("failed to fetch")) return "No hay conexión con Supabase.";
    return error?.message || "No se pudo iniciar sesión.";
  }

  window.AppAuth = { BASE, RUTA_LOGIN, RUTA_INICIO, syncServerSession, logout };

  // ---------------- A partir de aquí: solo en la página de login ----------------
  const formLogin = $("#form-login");
  if (!formLogin) return;

  const msgEl = $("#auth-message");
  const configBanner = $("#config-banner");

  function showMessage(text, type = "error") {
    if (!msgEl) return;
    msgEl.textContent = text;
    msgEl.className = "message message--" + type;
    msgEl.hidden = !text;
  }

  function setLoading(form, loading) {
    const btn = form?.querySelector('button[type="submit"]');
    if (!btn) return;
    btn.disabled = loading;
    btn.textContent = loading ? "Ingresando..." : "Entrar";
  }

  function clientOrWarn() {
    if (window.__AUTH_CONFIG_MISSING__) {
      showMessage("Configura public/assets/js/auth/config.js con tu SUPABASE_URL y tu clave pública.", "error");
      return null;
    }
    if (!window.supabaseClient) {
      showMessage("No se pudo inicializar Supabase. Revisa la consola del navegador.", "error");
      return null;
    }
    return window.supabaseClient;
  }

  // Si ya hay sesión en el navegador, se re-sincroniza con PHP y se entra directo
  async function redirectIfSession() {
    const client = window.supabaseClient;
    if (!client || window.__AUTH_CONFIG_MISSING__) return;
    const { data } = await client.auth.getSession();
    if (data?.session && (await syncServerSession(data.session)).ok) {
      window.location.href = RUTA_INICIO;
    }
  }

  formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();
    const client = clientOrWarn();
    if (!client) return;

    const email = $("#login-email").value.trim();
    const password = $("#login-password").value;

    // Validación de campos
    if (!email || !password) {
      showMessage("Completa el correo y la contraseña.", "error");
      return;
    }
    if (!REGEX_EMAIL.test(email)) {
      showMessage("Ingresa un correo electrónico válido.", "error");
      return;
    }
    if (password.length < 6) {
      showMessage("La contraseña debe tener al menos 6 caracteres.", "error");
      return;
    }

    setLoading(formLogin, true);
    showMessage("");

    const { data, error } = await client.auth.signInWithPassword({ email, password });

    if (error) {
      setLoading(formLogin, false);
      showMessage(traducirError(error), "error");
      return;
    }

    // Validación en el servidor (PHP)
    const resultado = await syncServerSession(data.session);
    setLoading(formLogin, false);

    if (!resultado.ok) {
      await client.auth.signOut();
      showMessage("El servidor no pudo validar la sesión: " + (resultado.mensaje || ""), "error");
      return;
    }

    showMessage("Sesión iniciada. Redirigiendo…", "ok");
    window.location.href = RUTA_INICIO;
  });

  if (configBanner && window.__AUTH_CONFIG_MISSING__) {
    configBanner.hidden = false;
  }

  redirectIfSession();
})();
