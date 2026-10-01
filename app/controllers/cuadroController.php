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

    public function crear()
    {
        require_once __DIR__ ."/../views/cuadro/crear.php";
    }

    public function guardar()
    {
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $alto=$_POST['alto'];
        $ancho=$_POST['ancho'];
        $precio_costo=$_POST['precio_costo'];
        $precio_venta=$_POST['precio_venta'];
        $imagen=$_POST['imagen'];
        $material=$_POST['material'];
        $estado=$_POST['estado'];
        $id_material_cuadro=$_POST['id_material_cuadro'];

        $cuadro = new cuadroModel();
        $resultado= $cuadro->guardar($nombre,$descripcion,$alto,$ancho,$precio_costo,$precio_venta,$imagen,$material,$estado,$id_material_cuadro);

        if ($resultado){
            echo "Cuadro guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el cuadro";
        }

    }

}