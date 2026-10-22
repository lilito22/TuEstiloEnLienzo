<?php 

require_once __DIR__ . "/../models/pedidoModel.php";

class pedidoController
{
    public function index()
    {
        try {
            $pedidoModel = new pedidoModel();
            $pedidos = $pedidoModel->getALL();
            $pedidoConsultado = $pedidoModel->getByid(1);
        }catch (PDOException $e) {
            echo "error en pedidoModel: " . $e->getMessage();
        }

        require_once __DIR__ . "/../views/pedido/index.php";
    }

     public function crear()
    {
        require_once __DIR__ ."/../views/pedido/crear.php";
    }

    public function guardar()
    {
        $id_cliente=$_POST['id_cliente'];
        $id_usuario=$_POST['id_usuario'];
        $fecha_pedido=$_POST['fecha_pedido'];
        $estado_pedido=$_POST['estado_pedido'];
        $subtotal=$_POST['subtotal'];
        $total=$_POST['total'];
        $tipo_entrega=$_POST['tipo_entrega'];
        $direccion_entrega=$_POST['direccion_entrega'];
        $ciudad_entrega=$_POST['ciudad_entrega'];
        $fecha_entrega=$_POST['fecha_entrega'];
        $observacion=$_POST['observacion'];

        $pedido = new pedidoModel();
        $resultado= $pedido->guardar($id_cliente,$id_usuario,$fecha_pedido,$estado_pedido,$subtotal,$total,$tipo_entrega,$direccion_entrega,$ciudad_entrega,$fecha_entrega,$observacion);

        if ($resultado){
            echo "pedido guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el pedido";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $mpedido = new cuadroModel();
        $pedido = $mpedido->getByid($id);

        require_once __DIR__ . "/../views/pedido/editar.php";
    }
}