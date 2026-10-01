<?php 

require_once __DIR__ . "/../models/egresoModel.php";

class egresoController
{
    public function index()
    {
        try {
            $egresoModel = new egresoModel();
            $egresos = $egresoModel->getALL();
            $egresoConsultado = $egresoModel->getByid(1);
        }catch (PDOException $e) {
            echo "error en egresoModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/egreso/index.php";
    }
} 