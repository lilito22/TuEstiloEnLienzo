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
$ruta = parse_url ($uri, PHP_URL_PATH)
?>

<a href="/cliente">Clientes</a>
<a href="/cliente/crear"> crear_Cliente</a>

<a href="/cuadro">Cuadros</a>
<a href="/cuadro/crear">Crear_Cuadro</a>

<a href="/cuadro_material">Cuadro_materiales</a>
<a href="/cuadro_material/crear">Crear_Cuadro_material</a>

<a href="/detalle_pedido">detalle_pedido</a>
<a href="/detalle_pedido/crear">Crear_detalle_pedido</a>

<a href="/egresos">egresos</a>
<a href="/egresos/crear">Crear_egresos</a>

<a href="/facturas">facturas</a>
<a href="/facturas/crear">Crear_facturas</a>

<a href="/materiales">materiales</a>
<a href="/materiales/crear">Crear_materiales</a>

<a href="/pagos">pagos</a>
<a href="/pagos/crear">Crear_pagos</a>

<a href="/pedidos">Pedidos</a>
<a href="/pedidos/crear">Crear_pedidos</a>

<a href="/tipo_egresos">tipo_egresos</a>
<a href="/tipo_egresos/crear">Crear_tipo_egresos</a>


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
if ($ruta === "cliente/editar" && $method === 'GET') {
    $clienteController = new clienteController();
    $clienteController->editar();
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
if ($ruta === "cuadro/editar" && $method === 'GET') {
    $cuadroController = new cuadroController();
    $cuadroController->editar();
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
if ($ruta === "cuadro_material/editar" && $method === 'GET') {
    $cuadro_materialController = new cuadro_materialController();
    $cuadro_materialController->editar();
}

if ($method === 'GET' && $uri === "/detalle_pedido") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->index();
}
if ($method === 'GET' && $uri === "/detalle_pedido/crear") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->crear();
}
if ($method === 'POST' && $uri === "/detalle_pedido") {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->guardar();
}
if ($ruta === "detalle_pedido/editar" && $method === 'GET') {
    $detalle_pedidoController = new detalle_pedidoController();
    $detalle_pedidoController->editar();
}

if ($method === 'GET' && $uri === "/egresos") {
    $egresoController = new egresoController();
    $egresoController->index();
}
if ($method === 'GET' && $uri === "/egresos/crear") {
    $egresoController = new egresoController();
    $egresoController->crear();
}
if ($method === 'POST' && $uri === "/egresos") {
    $egresoController = new egresoController();
    $egresoController->guardar();
}
if ($ruta === "egresos/editar" && $method === 'GET') {
    $egresoController = new egresoController();
    $egresoController->editar();
}

if ($method === 'GET' && $uri === "/facturas") {
    $facturaController = new facturaController();
    $facturaController->index();
}
if ($method === 'GET' && $uri === "/facturas/crear") {
    $facturaController = new facturaController();
    $facturaController->crear();
}
if ($method === 'POST' && $uri === "/facturas") {
    $facturaController = new facturaController();
    $facturaController->guardar();
}
if ($ruta === "facturas/editar" && $method === 'GET') {
    $facturaController = new facturaController();
    $facturaController->editar();
}

if ($method === 'GET' && $uri === "/materiales") {
    $materialController = new materialController();
    $materialController->index();
}
if ($method === 'GET' && $uri === "/materiales/crear") {
    $materialController = new materialController();
    $materialController->crear();
}
if ($method === 'POST' && $uri === "/materiales") {
    $materialController = new materialController();
    $materialController->guardar();
}
if ($ruta === "materiales/editar" && $method === 'GET') {
    $materialController = new materialController();
    $materialController->editar();
}

if ($method === 'GET' && $uri === "/pagos") {
    $pagoController = new pagoController();
    $pagoController->index();
}
if ($method === 'GET' && $uri === "/pagos/crear") {
    $pagoController = new pagoController();
    $pagoController->crear();
}
if ($method === 'POST' && $uri === "/pagos") {
    $pagoController = new pagoController();
    $pagoController->guardar();
}
if ($ruta === "pagos/editar" && $method === 'GET') {
    $pagoController = new pagoController();
    $pagoController->editar();
}

if ($method === 'GET' && $uri === "/pedidos") {
    $pedidoController = new pedidoController();
    $pedidoController->index();
}
if ($method === 'GET' && $uri === "/pedidos/crear") {
    $pedidoController = new pedidoController();
    $pedidoController->crear();
}
if ($method === 'POST' && $uri === "/pedidos") {
    $pedidoController = new pedidoController();
    $pedidoController->guardar();
}
if ($ruta === "pedidos/editar" && $method === 'GET') {
    $pedidoController = new pedidoController();
    $pedidoController->editar();
}

if ($method === 'GET' && $uri === "/tipo_egresos") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->index();
}
if ($method === 'GET' && $uri === "/tipo_egresos/crear") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->crear();
}
if ($method === 'POST' && $uri === "/tipo_egresos") {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->guardar();
}
if ($ruta === "tipo_egresos/editar" && $method === 'GET') {
    $tipo_egresoController = new tipo_egresoController();
    $tipo_egresoController->editar();
}




//$clienteController = new clienteController();
// $clienteController->index()
//$cuadroController = new cuadroController();
//$cuadroController->index();

//$pedidoController = new pedidoController();
//$pedidoController->index();