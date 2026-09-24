<?php 

require_once __DIR__ . "/../models/pedidoModel.php";

class pedidoController
{
    public function index()
    {
        try {
            $pedidoModel = new pedidoModel();
            $pedidos = $pedidoModel->getALL();
            $pedidoConsultado = $pedidoModel->getByid(1);
        }catch (PDOException $e) {
            echo "error en pedidoModel: " . $e->getMessage();
        }

        require_once __DIR__ . "/../views/pedido/index.php";
    }
}