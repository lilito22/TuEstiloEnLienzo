<?php

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
require_once __DIR__ . "/../app/controllers/homeController.php";

$rutas = require __DIR__ . "/../rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH); 



$enrutamiento = $rutas[$method][$ruta] ?? null;


if ($enrutamiento !== null && str_starts_with($ruta, "/api/")){
    $controlador = new $enrutamiento[0]();
    $controlador->{$enrutamiento[1]}();
    exit;
}

$contenido = ob_get_clean();

$home = new homeController();
$home->index($contenido);

?>