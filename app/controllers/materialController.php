<?php 

require_once __DIR__ . "/../models/materialModel.php";

class materialController
{
    public function index()
    {
        try {
            $materialModel = new materialModel();
            $materiales = $materialModel->getALL();
            $materialConsultado = $materialModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en materialModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/material/index.php";
    }
} 