<?php 

require_once __DIR__ . "/../models/clienteModel.php";

class clienteController
{
    public function index()
    {
        try {
            $clienteModel = new clienteModel();
            $clientes = $clienteModel->getALL();
            $clienteConsultado = $clienteModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en clienteModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/cliente/index.php";
    }

     public function crear()
    {
        require_once __DIR__ ."/../views/cliente/crear.php";
    }

     public function guardar()
    {
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $direccion=$_POST['direccion'];
        $ciudad=$_POST['ciudad'];
        $estado=$_POST['estado'];

        $cliente = new clienteModel();
        $resultado= $cliente->guardar($nombre,$apellido,$telefono,$correo,$direccion,$ciudad,$estado);

        if ($resultado){
            echo "Cliente guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el cliente";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $mcliente = new clienteModel();
        $cliente = $mcliente->getByid($id);

        require_once __DIR__ . "/../views/cliente/editar.php";
    }

    public function actualizar()
    {
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $direccion=$_POST['direccion'];
        $ciudad=$_POST['ciudad'];
        $estado=$_POST['estado'];

        $cliente = new clienteModel();
        $resultado = $cliente->actualizar($id,$nombre,$apellido,$telefono,$correo,$direccion,$ciudad,$estado);

        if ($resultado){
            echo "Cliente actualizado correctamente";
            $this->index();
        } else {
            echo "No se pudo actualizar el cliente";
        }
    }

    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        $cliente = new clienteModel();
        $resultado = $cliente->eliminar($id);

        if ($resultado){
            echo "Cliente eliminado correctamente";
        } else {
            echo "No se pudo eliminar el cliente";
        }
        $this->index();
    }
}