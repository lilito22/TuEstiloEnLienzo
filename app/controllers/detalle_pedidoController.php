<?php 

require_once __DIR__ . "/../models/detalle_pedidoModel.php";

class detalle_pedidoController
{
    public function index()
    {
        try {
            $detalle_pedidoModel = new detalle_pedidoModel();
            $detalle_pedidos = $detalle_pedidoModel->getALL();
            $detalle_pedidoConsultado = $detalle_pedidoModel->getByid(3);
        }catch (PDOException $e) {
            echo "error en detalle_pedidoModel: " . $e->getMessage(); 
        }
        require_once __DIR__ . "/../views/detalle_pedido/index.php";
    }

    public function crear()
    {
        require_once __DIR__ ."/../views/detalle_pedido/crear.php";
    }

    public function guardar()
    {
        $id_pedido=$_POST['id_pedido'];
        $id_cuadro=$_POST['id_cuadro'];
        $descripcion=$_POST['descripcion'];
        $alto=$_POST['alto'];
        $ancho=$_POST['ancho'];
        $cantidad=$_POST['cantidad'];
        $precio_unitario=$_POST['precio_unitario'];
        $subtotal=$_POST['subtotal'];

        $detalle_pedido = new detalle_pedidoModel();
        $resultado= $detalle_pedido->guardar($id_pedido,$id_cuadro,$descripcion,$alto,$ancho,$cantidad,$precio_unitario,$subtotal);

        if ($resultado){
            echo "detallePedido guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el detallePedido";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $detalle_p = new cuadroModel();
        $detalle_pedido = $detalle_p->getByid($id);

        require_once __DIR__ . "/../views/detalle_pedido/editar.php";
    }

} 