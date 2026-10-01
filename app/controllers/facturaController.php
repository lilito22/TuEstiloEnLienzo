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
} 