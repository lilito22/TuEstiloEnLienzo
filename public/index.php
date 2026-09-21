<?php

require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/cuadroController.php";

$clienteController = new clienteController();
$clienteController->index();

$cuadroController = new cuadroController();
$cuadroController->index();