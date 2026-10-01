<?php 

require_once __DIR__ . "/../models/cuadro_materialModel.php";

class cuadro_materialController
{
    public function index()
    {
        try {
            $cuadro_materialModel = new cuadro_materialModel();
            $cuadro_materiales = $cuadro_materialModel->getALL();
            $cuadro_materialConsultado = $cuadro_materialModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en cuadro_materialModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/cuadro_material/index.php";
    }

     public function crear()
    {
        require_once __DIR__ ."/../views/cuadro_material/crear.php";
    }

    public function guardar()
    {
        $id_material=$_POST['id_material'];
        $cantidad=$_POST['cantidad'];
        $subtotal_costo=$_POST['subtotal_costo'];

        $cuadro_material = new cuadro_materialModel();
        $resultado= $cuadro_material->guardar($id_material,$cantidad,$subtotal_costo);

        if ($resultado){
            echo "Cuadro_material guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el cuadro_material";
        }

    }
} 