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

     public function crear()
    {
        require_once __DIR__ ."/../views/material/crear.php";
    }

    public function guardar()
    {
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $unidad_medida=$_POST['unidad_medida'];
        $costo_unitario=$_POST['costo_unitario'];
        $estado=$_POST['estado'];

        $material = new materialModel();
        $resultado= $material->guardar($nombre,$descripcion,$unidad_medida,$costo_unitario,$estado);

        if ($resultado){
            echo "material guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el material";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $materialm = new materialModel();
        $material = $materialm->getByid($id);

        require_once __DIR__ . "/../views/material/editar.php";
    }

    public function actualizar()
    {
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $unidad_medida=$_POST['unidad_medida'];
        $costo_unitario=$_POST['costo_unitario'];
        $estado=$_POST['estado'];

        $material = new materialModel();
        $resultado = $material->actualizar($id,$nombre,$descripcion,$unidad_medida,$costo_unitario,$estado);

        if ($resultado){
            echo "Material actualizado correctamente";
            $this->index();
        } else {
            echo "No se pudo actualizar el material";
        }
    }

    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        $material = new materialModel();
        $resultado = $material->eliminar($id);

        if ($resultado){
            echo "Material eliminado correctamente";
        } else {
            echo "No se pudo eliminar el material";
        }
        $this->index();
    }
}