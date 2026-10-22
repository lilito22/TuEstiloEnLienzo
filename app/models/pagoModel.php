<?php

require_once __DIR__ . "/../../config/DataBase.php";

class pagoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM pago";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM pago WHERE id_pago = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($id_pedido,$fecha_pago,$monto,$metodo_pago,$tipo_movimiento,$referencia,$observacion)
    {
        try {
            $sql="INSERT INTO pago (id_pedido,fecha_pago,monto,metodo_pago,tipo_movimiento,referencia,observacion)
        VALUES (:id_pedido,:fecha_pago,:monto,:metodo_pago,:tipo_movimiento,:referencia,:observacion)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":id_pedido", $id_pedido);
        $consulta->bindparam(":fecha_pago", $fecha_pago);
        $consulta->bindparam(":monto", $monto);
        $consulta->bindparam(":metodo_pago", $metodo_pago);
        $consulta->bindparam(":tipo_movimiento", $tipo_movimiento);
        $consulta->bindparam(":referencia", $referencia);
        $consulta->bindparam(":observacion", $observacion);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el pago" . $id_pedido ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}