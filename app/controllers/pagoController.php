<?php 

require_once __DIR__ . "/../models/pagoModel.php";

class pagoController
{
    public function index()
    {
        try {
            $pagoModel = new pagoModel();
            $pagos = $pagoModel->getALL();
            $pagoConsultado = $pagoModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en pagoModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/pago/index.php";
    }
} 