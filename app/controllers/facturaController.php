<?php 

require_once __DIR__ . "/../models/facturaModel.php";

class facturaController
{
    public function index()
    {
        try {
            $facturaModel = new facturaModel();
            $facturas = $facturaModel->getALL();
            $facturaConsultado = $facturaModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en facturaModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/factura/index.php";
    }

     public function crear()
    {
        require_once __DIR__ ."/../views/factura/crear.php";
    }

    public function guardar()
    {
        $id_pedido=$_POST['id_pedido'];
        $numero_factura=$_POST['numero_factura'];
        $fecha_factura=$_POST['fecha_factura'];
        $subtotal=$_POST['subtotal'];
        $impuesto=$_POST['impuesto'];
        $total_factura=$_POST['total_factura'];
        $estado_factura=$_POST['estado_factura'];

        $factura = new facturaModel(); 
        $resultado= $factura->guardar($id_pedido,$numero_factura,$fecha_factura,$subtotal,$impuesto,$total_factura,$estado_factura);

        if ($resultado){
            echo "factura guardada correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar la factura";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $mfactura = new cuadroModel();
        $factura = $mfactura->getByid($id);

        require_once __DIR__ . "/../views/factura/editar.php";
    }
} 