<?php

require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/cuadroController.php";
require_once __DIR__ . "/../app/controllers/pedidoController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
?>

<a href="/cuadros">Cuadros</a>
<a href="/clientes">Clientes</a>
<a href="/pedidos">Pedidos</a>


<?php

if ($method === 'GET' && $uri === "/cuadros") {
    $cuadroController = new cuadroController();
    $cuadroController->index();
 
}

if ($method === 'GET' && $uri === "/clientes") {
    $clienteController = new clienteController();
    $clienteController->index();
 
}

if ($method === 'GET' && $uri === "/pedidos") {
    $pedidoController = new pedidoController();
    $pedidoController->index();
}

//$clienteController = new clienteController();
// $clienteController->index()
//$cuadroController = new cuadroController();
//$cuadroController->index();

//$pedidoController = new pedidoController();
//$pedidoController->index();