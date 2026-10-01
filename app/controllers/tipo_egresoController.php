<?php 

require_once __DIR__ . "/../models/tipo_egresoModel.php";

class tipo_egresoController
{
    public function index()
    {
        try {
            $tipo_egresoModel = new tipo_egresoModel();
            $tipo_egresos = $tipo_egresoModel->getALL();
            $tipo_egresoConsultado = $tipo_egresoModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en tipo_egresoModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/cliente/index.php";
    }
} 