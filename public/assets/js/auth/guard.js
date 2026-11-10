/**
 * Protección VISUAL de páginas privadas + datos del usuario + logout.
 * Adaptado del archivo del instructor. Se incluye en app/views/layout/menu.php.
 *
 * La protección real la hace PHP (authController::requerirAutenticacion):
 * si alguien escribe la URL a mano sin sesión, el servidor lo rechaza.
 */
(function () {
  const $ = (sel) => document.querySelector(sel);
  const { RUTA_LOGIN, syncServerSession, logout } = window.AppAuth;

  function fillUser(user) {
    const email = user.email || "—";
    const name = user.user_metadata?.full_name || email;
    const id = user.id || "—";

    document.querySelectorAll("[data-user-email]").forEach((el) => (el.textContent = email));
    document.querySelectorAll("[data-user-name]").forEach((el) => (el.textContent = name));
    document.querySelectorAll("[data-user-id]").forEach((el) => (el.textContent = id));
  }

  async function irAlLogin() {
    await fetch(window.AppAuth.BASE + "/auth/logout", { method: "POST", credentials: "same-origin" });
    window.location.href = RUTA_LOGIN;
  }

  async function requireSession() {
    if (window.__AUTH_CONFIG_MISSING__ || !window.supabaseClient) {
      await irAlLogin();
      return null;
    }
    const { data, error } = await window.supabaseClient.auth.getSession();
    if (error || !data?.session) {
      await irAlLogin();
      return null;
    }
    return data.session;
  }

  async function init() {
    const session = await requireSession();
    if (!session) return;

    fillUser(session.user);
    $("#menu-principal")?.removeAttribute("hidden");
    $("#btn-logout")?.addEventListener("click", logout);

    window.supabaseClient.auth.onAuthStateChange((event, newSession) => {
      if (event === "SIGNED_OUT") {
        window.location.href = RUTA_LOGIN;
      } else if (event === "TOKEN_REFRESHED" && newSession) {
        // El token se renovó: se le envía el nuevo a PHP
        syncServerSession(newSession);
      }
    });
  }

  init();
})();
