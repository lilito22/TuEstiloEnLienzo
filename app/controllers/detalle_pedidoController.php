<?php 

require_once __DIR__ . "/../models/detalle_pedidoModel.php";

class detalle_pedidoController
{
    public function index()
    {
        try {
            $detalle_pedidoModel = new detalle_pedidoModel();
            $detalle_pedidos = $detalle_pedidoModel->getALL();
            $detalle_pedidoConsultado = $detalle_pedidoModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en detalle_pedidoModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/detalle_pedido/index.php";
    }
} 