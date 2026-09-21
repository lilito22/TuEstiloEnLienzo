<?php 

require_once __DIR__ . "/../models/clienteModel.php";

class clienteController
{
    public function index()
    {
        try {
            $clienteModel = new clienteModel();
            $clientes = $clienteModel->getALL();
            $clienteConsultado = $clienteModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en clienteModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/cliente/index.php";
    }
} 