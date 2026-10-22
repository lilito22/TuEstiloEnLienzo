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

     public function crear()
    {
        require_once __DIR__ ."/../views/tipo_egreso/crear.php";
    }

    public function guardar()
    {
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];

        $tipo_egreso = new tipo_egresoModel();
        $resultado= $tipo_egreso->guardar($nombre,$descripcion);

        if ($resultado){
            echo "tipo de egreso guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el tipo de egreso";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $mtipo_egreso = new cuadroModel();
        $tipo_egreso = $mtipo_egreso->getByid($id);

        require_once __DIR__ . "/../views/tipo_egreso/editar.php";
    }
} 