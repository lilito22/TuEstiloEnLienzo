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

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
?>

<a href="/cliente">Clientes</a>
<a href="/cliente/crear"> crear_Cliente</a>

<a href="/cuadro">Cuadros</a>
<a href="/cuadro/crear">Crear_Cuadro</a>

<a href="/cuadro_material">Cuadro_materiales</a>
<a href="/cuadro_material/crear">Crear_Cuadro_material</a>

<a href="/detalle_pedido">detalle_pedido</a>

<a href="/egresos">egresos</a>

<a href="/facturas">facturas</a>

<a href="/materiales">materiales</a>

<a href="/pagos">pagos</a>

<a href="/pedidos">Pedidos</a>

<a href="/tipo_egresos">tipo_egresos</a>


<?php

if ($method === 'GET' && $uri === "/cliente") {
    $clienteController = new clienteController();
    $clienteController->index();
}
if ($method === 'GET' && $uri === "/cliente/crear") {
    $clienteController = new clienteController();
    $clienteController->crear();
}
if ($method === 'POST' && $uri === "/cliente") {
    $clienteController = new clienteController();
    $clienteController->guardar();
}

if ($method === 'GET' && $uri === "/cuadro") {
    $cuadroController = new cuadroController();
    $cuadroController->index();
}
if ($method === 'GET' && $uri === "/cuadro/crear") {
    $cuadroController = new cuadroController();
    $cuadroController->crear();
}
if ($method === 'POST' && $uri === "/cuadro") {
    $cuadroController = new cuadroController();
    $cuadroController->guardar();
}

if ($method === 'GET' && $uri === "/cuadro_material") {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->index();
}
if ($method === 'GET' && $uri === "/cuadro_material/crear") {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->crear();
}
if ($method === 'POST' && $uri === "/cuadro_material") {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->guardar();
}

if ($method === 'GET' && $uri === "/detalle_pedido") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->index();
}

if ($method === 'GET' && $uri === "/egresos") {
    $egresoController = new egresoController();
    $egresoController->index();
}

if ($method === 'GET' && $uri === "/facturas") {
    $facturaController = new facturaController();
    $facturaController->index();
}

if ($method === 'GET' && $uri === "/materiales") {
    $materialController = new materialController();
    $materialController->index();
}

if ($method === 'GET' && $uri === "/pagos") {
    $pagoController = new pagoController();
    $pagoController->index();
}

if ($method === 'GET' && $uri === "/pedidos") {
    $pedidoController = new pedidoController();
    $pedidoController->index();
}

if ($method === 'GET' && $uri === "/tipo_egresos") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->index();
}


//$clienteController = new clienteController();
// $clienteController->index()
//$cuadroController = new cuadroController();
//$cuadroController->index();

//$pedidoController = new pedidoController();
//$pedidoController->index();