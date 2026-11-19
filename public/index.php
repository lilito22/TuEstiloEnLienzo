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

$rutas = require __DIR__ . "/../rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

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
$enrutamiento = $rutas[$method][$ruta] ?? null;

if($enrutamiento !== null){
    $nombreControlador = $enrutamiento[0];
    $nombreMetodo = $enrutamiento[1];

    $controlador = new $nombreControlador();
    $controlador->$nombreMetodo();
}