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

     public function crear()
    {
        require_once __DIR__ ."/../views/egreso/crear.php";
    }

    public function guardar()
    {
        $fecha_egreso=$_POST['fecha_egreso'];
        $concepto=$_POST['concepto'];
        $id_tipo_egreso=$_POST['id_tipo_egreso'];
        $valor=$_POST['valor'];
        $observacion=$_POST['observacion'];

        $egreso = new egresoModel();
        $resultado= $egreso->guardar($fecha_egreso,$concepto,$id_tipo_egreso,$valor,$observacion);

        if ($resultado){
            echo "egreso guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el egreso";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $egresom = new egresoModel();
        $egresoo = $egresom->getByid($id);

        require_once __DIR__ . "/../views/egreso/editar.php";
    }
} 