/**
 * Configuración pública de Supabase (cliente / navegador).
 *
 * 1. Copia este archivo como: public/assets/js/auth/config.js
 * 2. Pega Project URL y la clave pública (publishable / anon) desde:
 *    Supabase → Project Settings → API Keys
 * 3. NO pegues aquí la service_role / secret key.
 *
 * Los mismos valores van en el .env (SUPABASE_URL y SUPABASE_PUBLISHABLE_KEY)
 * porque PHP los usa para validar el token en el servidor.
 */
window.APP_CONFIG = {
  SUPABASE_URL: "https://TU-PROYECTO.supabase.co",
  SUPABASE_ANON_KEY: "pega_aqui_tu_anon_key",
};
