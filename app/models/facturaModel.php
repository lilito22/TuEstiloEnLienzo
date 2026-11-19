<?php

require_once __DIR__ . "/../../config/DataBase.php";

class facturaModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM factura";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM factura WHERE id_factura = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($id_pedido,$numero_factura,$fecha_factura,$subtotal,$impuesto,$total_factura,$estado_factura)
    {
        try {
            $sql="INSERT INTO factura (id_pedido,numero_factura,fecha_factura,subtotal,impuesto,total_factura,estado_factura)
        VALUES (:id_pedido,:numero_factura,:fecha_factura,:subtotal,:impuesto,:total_factura,:estado_factura)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":id_pedido", $id_pedido);
        $consulta->bindparam(":numero_factura", $numero_factura);
        $consulta->bindparam(":fecha_factura", $fecha_factura);
        $consulta->bindparam(":subtotal", $subtotal);
        $consulta->bindparam(":impuesto", $impuesto);
        $consulta->bindparam(":total_factura", $total_factura);
        $consulta->bindparam(":estado_factura", $estado_factura);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar la factura" . $id_pedido ."ERROR SQL: " .$e->getMessage();
        }
       
    }

    public function actualizar($id,$id_pedido,$numero_factura,$fecha_factura,$subtotal,$impuesto,$total_factura,$estado_factura)
    {
        try {
            $sql = "UPDATE factura SET id_pedido = :id_pedido, numero_factura = :numero_factura, fecha_factura = :fecha_factura, subtotal = :subtotal, impuesto = :impuesto, total_factura = :total_factura, estado_factura = :estado_factura
                    WHERE id_factura = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindparam(":id", $id);
            $consulta->bindparam(":id_pedido", $id_pedido);
            $consulta->bindparam(":numero_factura", $numero_factura);
            $consulta->bindparam(":fecha_factura", $fecha_factura);
            $consulta->bindparam(":subtotal", $subtotal);
            $consulta->bindparam(":impuesto", $impuesto);
            $consulta->bindparam(":total_factura", $total_factura);
            $consulta->bindparam(":estado_factura", $estado_factura);

            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al actualizar el factura. ERROR SQL: " . $e->getMessage();
        }
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM factura WHERE id_factura = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindparam(":id", $id);

            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al eliminar el factura. ERROR SQL: " . $e->getMessage();
        }
    }
}