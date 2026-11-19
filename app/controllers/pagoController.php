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

     public function crear()
    {
        require_once __DIR__ ."/../views/pago/crear.php";
    }

    public function guardar()
    {
        $id_pedido=$_POST['id_pedido'];
        $fecha_pago=$_POST['fecha_pago'];
        $monto=$_POST['monto'];
        $metodo_pago=$_POST['metodo_pago'];
        $tipo_movimiento=$_POST['tipo_movimiento'];
        $referencia=$_POST['referencia'];
        $observacion=$_POST['observacion'];

        $pago = new pagoModel();
        $resultado= $pago->guardar($id_pedido,$fecha_pago,$monto,$metodo_pago,$tipo_movimiento,$referencia,$observacion);

        if ($resultado){
            echo "pago guardado correctamente";
            $this->index();
        } else{
            echo "No se puedo guardar el pago";
        }

    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $mpago = new pagoModel();
        $pago = $mpago->getByid($id);

        require_once __DIR__ . "/../views/pago/editar.php";
    }

    public function actualizar()
    {
        $id=$_POST['id'];
        $id_pedido=$_POST['id_pedido'];
        $fecha_pago=$_POST['fecha_pago'];
        $monto=$_POST['monto'];
        $metodo_pago=$_POST['metodo_pago'];
        $tipo_movimiento=$_POST['tipo_movimiento'];
        $referencia=$_POST['referencia'];
        $observacion=$_POST['observacion'];

        $pago = new pagoModel();
        $resultado = $pago->actualizar($id,$id_pedido,$fecha_pago,$monto,$metodo_pago,$tipo_movimiento,$referencia,$observacion);

        if ($resultado){
            echo "Pago actualizado correctamente";
            $this->index();
        } else {
            echo "No se pudo actualizar el pago";
        }
    }

    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        $pago = new pagoModel();
        $resultado = $pago->eliminar($id);

        if ($resultado){
            echo "Pago eliminado correctamente";
        } else {
            echo "No se pudo eliminar el pago";
        }
        $this->index();
    }
}