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

switch ($ruta) {

    case '/cliente':
        if ($method === 'GET') {
            $clienteController = new clienteController();
            $clienteController->index();
        } else if ($method === 'POST') {
            $clienteController = new clienteController();
            $clienteController->guardar();
        }
        break;

    case '/cliente/crear':
        if ($method === 'GET') {
            $clienteController = new clienteController();
            $clienteController->crear();
        }
        break;

    case '/cliente/editar':
        if ($method === 'GET') {
            $clienteController = new clienteController();
            $clienteController->editar();
        } else if ($method === 'POST') {
            $clienteController = new clienteController();
            $clienteController->actualizar();
        }
        break;

    case '/cliente/eliminar':
        if ($method === 'POST') {
            $clienteController = new clienteController();
            $clienteController->eliminar();
        }
        break;

    case '/cuadro':
        if ($method === 'GET') {
            $cuadroController = new cuadroController();
            $cuadroController->index();
        } else if ($method === 'POST') {
            $cuadroController = new cuadroController();
            $cuadroController->guardar();
        }
        break;

    case '/cuadro/crear':
        if ($method === 'GET') {
            $cuadroController = new cuadroController();
            $cuadroController->crear();
        }
        break;

    case '/cuadro/editar':
        if ($method === 'GET') {
            $cuadroController = new cuadroController();
            $cuadroController->editar();
        } else if ($method === 'POST') {
            $cuadroController = new cuadroController();
            $cuadroController->actualizar();
        }
        break;

    case '/cuadro/eliminar':
        if ($method === 'POST') {
            $cuadroController = new cuadroController();
            $cuadroController->eliminar();
        }
        break;

    case '/cuadro_material':
        if ($method === 'GET') {
            $cuadro_materialController = new cuadro_materialController();
            $cuadro_materialController->index();
        } else if ($method === 'POST') {
            $cuadro_materialController = new cuadro_materialController();
            $cuadro_materialController->guardar();
        }
        break;

    case '/cuadro_material/crear':
        if ($method === 'GET') {
            $cuadro_materialController = new cuadro_materialController();
            $cuadro_materialController->crear();
        }
        break;

    case '/cuadro_material/editar':
        if ($method === 'GET') {
            $cuadro_materialController = new cuadro_materialController();
            $cuadro_materialController->editar();
        } else if ($method === 'POST') {
            $cuadro_materialController = new cuadro_materialController();
            $cuadro_materialController->actualizar();
        }
        break;

    case '/cuadro_material/eliminar':
        if ($method === 'POST') {
            $cuadro_materialController = new cuadro_materialController();
            $cuadro_materialController->eliminar();
        }
        break;

    case '/detalle_pedido':
        if ($method === 'GET') {
            $detalle_pedidoController = new detalle_pedidoController();
            $detalle_pedidoController->index();
        } else if ($method === 'POST') {
            $detalle_pedidoController = new detalle_pedidoController();
            $detalle_pedidoController->guardar();
        }
        break;

    case '/detalle_pedido/crear':
        if ($method === 'GET') {
            $detalle_pedidoController = new detalle_pedidoController();
            $detalle_pedidoController->crear();
        }
        break;

    case '/detalle_pedido/editar':
        if ($method === 'GET') {
            $detalle_pedidoController = new detalle_pedidoController();
            $detalle_pedidoController->editar();
        } else if ($method === 'POST') {
            $detalle_pedidoController = new detalle_pedidoController();
            $detalle_pedidoController->actualizar();
        }
        break;

    case '/detalle_pedido/eliminar':
        if ($method === 'POST') {
            $detalle_pedidoController = new detalle_pedidoController();
            $detalle_pedidoController->eliminar();
        }
        break;

    case '/egresos':
        if ($method === 'GET') {
            $egresoController = new egresoController();
            $egresoController->index();
        } else if ($method === 'POST') {
            $egresoController = new egresoController();
            $egresoController->guardar();
        }
        break;

    case '/egresos/crear':
        if ($method === 'GET') {
            $egresoController = new egresoController();
            $egresoController->crear();
        }
        break;

    case '/egresos/editar':
        if ($method === 'GET') {
            $egresoController = new egresoController();
            $egresoController->editar();
        } else if ($method === 'POST') {
            $egresoController = new egresoController();
            $egresoController->actualizar();
        }
        break;

    case '/egresos/eliminar':
        if ($method === 'POST') {
            $egresoController = new egresoController();
            $egresoController->eliminar();
        }
        break;

    case '/facturas':
        if ($method === 'GET') {
            $facturaController = new facturaController();
            $facturaController->index();
        } else if ($method === 'POST') {
            $facturaController = new facturaController();
            $facturaController->guardar();
        }
        break;

    case '/facturas/crear':
        if ($method === 'GET') {
            $facturaController = new facturaController();
            $facturaController->crear();
        }
        break;

    case '/facturas/editar':
        if ($method === 'GET') {
            $facturaController = new facturaController();
            $facturaController->editar();
        } else if ($method === 'POST') {
            $facturaController = new facturaController();
            $facturaController->actualizar();
        }
        break;

    case '/facturas/eliminar':
        if ($method === 'POST') {
            $facturaController = new facturaController();
            $facturaController->eliminar();
        }
        break;

    case '/materiales':
        if ($method === 'GET') {
            $materialController = new materialController();
            $materialController->index();
        } else if ($method === 'POST') {
            $materialController = new materialController();
            $materialController->guardar();
        }
        break;

    case '/materiales/crear':
        if ($method === 'GET') {
            $materialController = new materialController();
            $materialController->crear();
        }
        break;

    case '/materiales/editar':
        if ($method === 'GET') {
            $materialController = new materialController();
            $materialController->editar();
        } else if ($method === 'POST') {
            $materialController = new materialController();
            $materialController->actualizar();
        }
        break;

    case '/materiales/eliminar':
        if ($method === 'POST') {
            $materialController = new materialController();
            $materialController->eliminar();
        }
        break;

    case '/pagos':
        if ($method === 'GET') {
            $pagoController = new pagoController();
            $pagoController->index();
        } else if ($method === 'POST') {
            $pagoController = new pagoController();
            $pagoController->guardar();
        }
        break;

    case '/pagos/crear':
        if ($method === 'GET') {
            $pagoController = new pagoController();
            $pagoController->crear();
        }
        break;

    case '/pagos/editar':
        if ($method === 'GET') {
            $pagoController = new pagoController();
            $pagoController->editar();
        } else if ($method === 'POST') {
            $pagoController = new pagoController();
            $pagoController->actualizar();
        }
        break;

    case '/pagos/eliminar':
        if ($method === 'POST') {
            $pagoController = new pagoController();
            $pagoController->eliminar();
        }
        break;

    case '/pedidos':
        if ($method === 'GET') {
            $pedidoController = new pedidoController();
            $pedidoController->index();
        } else if ($method === 'POST') {
            $pedidoController = new pedidoController();
            $pedidoController->guardar();
        }
        break;

    case '/pedidos/crear':
        if ($method === 'GET') {
            $pedidoController = new pedidoController();
            $pedidoController->crear();
        }
        break;

    case '/pedidos/editar':
        if ($method === 'GET') {
            $pedidoController = new pedidoController();
            $pedidoController->editar();
        } else if ($method === 'POST') {
            $pedidoController = new pedidoController();
            $pedidoController->actualizar();
        }
        break;

    case '/pedidos/eliminar':
        if ($method === 'POST') {
            $pedidoController = new pedidoController();
            $pedidoController->eliminar();
        }
        break;

    case '/tipo_egresos':
        if ($method === 'GET') {
            $tipo_egresoController = new tipo_egresoController();
            $tipo_egresoController->index();
        } else if ($method === 'POST') {
            $tipo_egresoController = new tipo_egresoController();
            $tipo_egresoController->guardar();
        }
        break;

    case '/tipo_egresos/crear':
        if ($method === 'GET') {
            $tipo_egresoController = new tipo_egresoController();
            $tipo_egresoController->crear();
        }
        break;

    case '/tipo_egresos/editar':
        if ($method === 'GET') {
            $tipo_egresoController = new tipo_egresoController();
            $tipo_egresoController->editar();
        } else if ($method === 'POST') {
            $tipo_egresoController = new tipo_egresoController();
            $tipo_egresoController->actualizar();
        }
        break;

    case '/tipo_egresos/eliminar':
        if ($method === 'POST') {
            $tipo_egresoController = new tipo_egresoController();
            $tipo_egresoController->eliminar();
        }
        break;

    default:
        echo "Página no encontrada";
        break;
}