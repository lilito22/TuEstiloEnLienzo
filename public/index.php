<?php

// Si se usa "php -S", dejar que sirva directamente los archivos que existen (JS, CSS, imágenes)
if (PHP_SAPI === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/cuadroController.php";
require_once __DIR__ . "/../app/controllers/cuadro_materialController.php";
require_once __DIR__ . "/../app/controllers/detalle_pedidoController.php";
require_once __DIR__ . "/../app/controllers/egresoController.php";
require_once __DIR__ . "/../app/controllers/facturaController.php";
require_once __DIR__ . "/../app/controllers/materialController.php";
require_once __DIR__ . "/../app/controllers/pagoController.php";
require_once __DIR__ . "/../app/controllers/pedidoController.php";
require_once __DIR__ . "/../app/controllers/tipo_egresoController.php";

require_once __DIR__ . "/../app/controllers/authController.php";

authController::iniciarSesionPhp();

$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
$basePath = rtrim($basePath, '/');
if ($basePath === '.') {
    $basePath = '';
}
define('APP_BASE_PATH', $basePath);

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);
if ($basePath !== '' && strpos($ruta, $basePath . '/') === 0) {
    $ruta = substr($ruta, strlen($basePath));
} elseif ($ruta === $basePath) {
    $ruta = '/';
}

// ===================== RUTAS PÚBLICAS (sin sesión) =====================
if ($method === 'GET' && $ruta === "/login") {
    if (authController::estaAutenticado()) {
        header('Location: ' . APP_BASE_PATH . '/');
        exit;
    }
    (new authController())->login();
    exit;
}
if ($method === 'POST' && $ruta === "/auth/session") {
    (new authController())->crearSesion();
    exit;
}
if ($method === 'POST' && $ruta === "/auth/logout") {
    (new authController())->cerrarSesion();
    exit;
}

// ============ DE AQUÍ EN ADELANTE TODO REQUIERE SESIÓN VÁLIDA ============
// Si alguien escribe la URL a mano sin haber iniciado sesión, PHP lo
// redirige a /login (GET) o responde 401 (POST). No depende de JavaScript.
authController::requerirAutenticacion();

require_once __DIR__ . "/../app/views/layout/menu.php";

if ($method === 'GET' && $ruta === "/") {
    echo "<h1>Bienvenido/a a TuEstiloEnLienzo</h1>";
    echo "<p>Selecciona un módulo del menú.</p>";
}

if ($method === 'GET' && $ruta === "/cliente") {
    $clienteController = new clienteController();
    $clienteController->index();
}
if ($method === 'GET' && $ruta === "/cliente/crear") {
    $clienteController = new clienteController();
    $clienteController->crear();
}
if ($method === 'POST' && $ruta === "/cliente") {
    $clienteController = new clienteController();
    $clienteController->guardar();
}
if ($ruta === "/cliente/editar" && $method === 'GET') {
    $clienteController = new clienteController();
    $clienteController->editar();
}

if ($method === 'GET' && $ruta === "/cuadro") {
    $cuadroController = new cuadroController();
    $cuadroController->index();
}
if ($method === 'GET' && $ruta === "/cuadro/crear") {
    $cuadroController = new cuadroController();
    $cuadroController->crear();
}
if ($method === 'POST' && $ruta === "/cuadro") {
    $cuadroController = new cuadroController();
    $cuadroController->guardar();
}
if ($ruta === "/cuadro/editar" && $method === 'GET') {
    $cuadroController = new cuadroController();
    $cuadroController->editar();
}

if ($method === 'GET' && $ruta === "/cuadro_material") {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->index();
}
if ($method === 'GET' && $ruta === "/cuadro_material/crear") {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->crear();
}
if ($method === 'POST' && $ruta === "/cuadro_material") {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->guardar();
}
if ($ruta === "/cuadro_material/editar" && $method === 'GET') {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->editar();
}

if ($method === 'GET' && $ruta === "/detalle_pedido") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->index();
}
if ($method === 'GET' && $ruta === "/detalle_pedido/crear") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->crear();
}
if ($method === 'POST' && $ruta === "/detalle_pedido") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->guardar();
}
if ($ruta === "/detalle_pedido/editar" && $method === 'GET') {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->editar();
}

if ($method === 'GET' && $ruta === "/egresos") {
    $egresoController = new egresoController();
    $egresoController->index();
}
if ($method === 'GET' && $ruta === "/egresos/crear") {
    $egresoController = new egresoController();
    $egresoController->crear();
}
if ($method === 'POST' && $ruta === "/egresos") {
    $egresoController = new egresoController();
    $egresoController->guardar();
}
if ($ruta === "/egresos/editar" && $method === 'GET') {
    $egresoController = new egresoController();
    $egresoController->editar();
}

if ($method === 'GET' && $ruta === "/facturas") {
    $facturaController = new facturaController();
    $facturaController->index();
}
if ($method === 'GET' && $ruta === "/facturas/crear") {
    $facturaController = new facturaController();
    $facturaController->crear();
}
if ($method === 'POST' && $ruta === "/facturas") {
    $facturaController = new facturaController();
    $facturaController->guardar();
}
if ($ruta === "/facturas/editar" && $method === 'GET') {
    $facturaController = new facturaController();
    $facturaController->editar();
}

if ($method === 'GET' && $ruta === "/materiales") {
    $materialController = new materialController();
    $materialController->index();
}
if ($method === 'GET' && $ruta === "/materiales/crear") {
    $materialController = new materialController();
    $materialController->crear();
}
if ($method === 'POST' && $ruta === "/materiales") {
    $materialController = new materialController();
    $materialController->guardar();
}
if ($ruta === "/materiales/editar" && $method === 'GET') {
    $materialController = new materialController();
    $materialController->editar();
}

if ($method === 'GET' && $ruta === "/pagos") {
    $pagoController = new pagoController();
    $pagoController->index();
}
if ($method === 'GET' && $ruta === "/pagos/crear") {
    $pagoController = new pagoController();
    $pagoController->crear();
}
if ($method === 'POST' && $ruta === "/pagos") {
    $pagoController = new pagoController();
    $pagoController->guardar();
}
if ($ruta === "/pagos/editar" && $method === 'GET') {
    $pagoController = new pagoController();
    $pagoController->editar();
}

if ($method === 'GET' && $ruta === "/pedidos") {
    $pedidoController = new pedidoController();
    $pedidoController->index();
}
if ($method === 'GET' && $ruta === "/pedidos/crear") {
    $pedidoController = new pedidoController();
    $pedidoController->crear();
}
if ($method === 'POST' && $ruta === "/pedidos") {
    $pedidoController = new pedidoController();
    $pedidoController->guardar();
}
if ($ruta === "/pedidos/editar" && $method === 'GET') {
    $pedidoController = new pedidoController();
    $pedidoController->editar();
}

if ($method === 'GET' && $ruta === "/tipo_egresos") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->index();
}
if ($method === 'GET' && $ruta === "/tipo_egresos/crear") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->crear();
}
if ($method === 'POST' && $ruta === "/tipo_egresos") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->guardar();
}
if ($ruta === "/tipo_egresos/editar" && $method === 'GET') {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->editar();
}




//$clienteController = new clienteController();
// $clienteController->index()
//$cuadroController = new cuadroController();
//$cuadroController->index();

//$pedidoController = new pedidoController();
//$pedidoController->index();