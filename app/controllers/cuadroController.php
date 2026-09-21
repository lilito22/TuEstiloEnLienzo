<?php 

require_once __DIR__ . "/../models/cuadroModel.php";

class cuadroController
{
    public function index()
    {
        try {
            $cuadroModel = new cuadroModel();
            $cuadros = $cuadroModel->getALL();
            $cuadroConsultado = $cuadroModel->getByid(1);
        }catch (PDOException $e) {
            echo "error en cuadroModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/cuadro/index.php";
    }
}