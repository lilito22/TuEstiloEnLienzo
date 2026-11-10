<?php

/**
 * Valida en el servidor el access_token que envía el navegador,
 * preguntándole directamente a Supabase quién es el dueño del token.
 * Solo usa la clave PÚBLICA (publishable key); nunca la service_role.
 */
class SupabaseAuth
{
    private $url;
    private $publishableKey;
    public $ultimoError = '';

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . "/../.env");

        $this->url = rtrim($env['SUPABASE_URL'] ?? '', '/');
        $this->publishableKey = $env['SUPABASE_PUBLISHABLE_KEY'] ?? ($env['SUPABASE_ANON_KEY'] ?? '');
    }

    /**
     * Devuelve el usuario (array) si el token es válido, o null si no lo es.
     */
    public function validarToken($accessToken)
    {
        if (empty($this->url) || empty($this->publishableKey)) {
            $this->ultimoError = "Faltan SUPABASE_URL o SUPABASE_PUBLISHABLE_KEY en el archivo .env";
            return null;
        }
        if (empty($accessToken)) {
            $this->ultimoError = "No llegó el access_token al servidor";
            return null;
        }
        if (!function_exists('curl_init')) {
            $this->ultimoError = "La extensión curl de PHP no está activada (php.ini: extension=curl)";
            return null;
        }

        $ch = curl_init($this->url . "/auth/v1/user");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            // Certificados raíz incluidos en el proyecto: evita el error
            // "SSL certificate problem" de XAMPP en Windows sin desactivar la verificación.
            CURLOPT_CAINFO => __DIR__ . "/cacert.pem",
            CURLOPT_HTTPHEADER => [
                "apikey: " . $this->publishableKey,
                "Authorization: Bearer " . $accessToken,
            ],
        ]);

        $respuesta = curl_exec($ch);
        $codigo = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $errorCurl = curl_error($ch);
        curl_close($ch);

        if ($respuesta === false) {
            $this->ultimoError = "PHP no pudo conectarse a Supabase: " . $errorCurl;
            return null;
        }
        if ($codigo !== 200) {
            $this->ultimoError = "Supabase rechazó el token (HTTP $codigo): " . substr($respuesta, 0, 200);
            return null;
        }

        $usuario = json_decode($respuesta, true);
        return isset($usuario['id']) ? $usuario : null;
    }

    /**
     * Lee la fecha de expiración (exp) del JWT.
     * Se usa SOLO después de que Supabase confirmó que el token es válido.
     */
    public static function obtenerExpiracion($accessToken)
    {
        $partes = explode('.', $accessToken);
        if (count($partes) !== 3) {
            return 0;
        }
        $payload = json_decode(base64_decode(strtr($partes[1], '-_', '+/')), true);
        return isset($payload['exp']) ? (int) $payload['exp'] : 0;
    }
}
