<?php

require_once __DIR__ . "/../../config/SupabaseAuth.php";

class authController
{
    /** Inicia la sesión PHP con cookies seguras. Se llama una vez en index.php */
    public static function iniciarSesionPhp()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_set_cookie_params([
                'httponly' => true,
                'samesite' => 'Lax',
            ]);
            session_start();
        }
    }

    /** GET /login -> muestra el formulario */
    public function login()
    {
        require_once __DIR__ . "/../views/auth/login.php";
    }

    /**
     * POST /auth/session
     * Recibe el access_token de Supabase desde JavaScript, lo valida contra
     * Supabase y, si es válido, guarda el usuario en la sesión de PHP.
     */
    public function crearSesion()
    {
        header('Content-Type: application/json');

        $datos = json_decode(file_get_contents('php://input'), true);
        $token = $datos['access_token'] ?? '';

        $supabase = new SupabaseAuth();
        $usuario = $supabase->validarToken($token);

        if (!$usuario) {
            $this->limpiarSesion();
            http_response_code(401);
            echo json_encode(['ok' => false, 'mensaje' => $supabase->ultimoError ?: 'Token inválido o expirado']);
            return;
        }

        session_regenerate_id(true);
        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'email' => $usuario['email'] ?? '',
        ];
        $_SESSION['token_exp'] = SupabaseAuth::obtenerExpiracion($token);

        echo json_encode(['ok' => true, 'email' => $_SESSION['usuario']['email']]);
    }

    /** POST /auth/logout -> destruye la sesión de PHP */
    public function cerrarSesion()
    {
        header('Content-Type: application/json');
        $this->limpiarSesion();
        echo json_encode(['ok' => true]);
    }

    public static function estaAutenticado()
    {
        return isset($_SESSION['usuario'], $_SESSION['token_exp'])
            && time() < $_SESSION['token_exp'];
    }

    /**
     * Protege las rutas: si no hay sesión válida, una petición GET se
     * redirige al login y cualquier otra (POST, etc.) se rechaza con 401.
     */
    public static function requerirAutenticacion()
    {
        if (self::estaAutenticado()) {
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            header('Location: ' . APP_BASE_PATH . '/login');
        } else {
            http_response_code(401);
            echo "No autorizado. Inicie sesión.";
        }
        exit;
    }

    private function limpiarSesion()
    {
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $p = session_get_cookie_params();
            setcookie(session_name(), '', time() - 3600, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
        }
        session_destroy();
    }
}
