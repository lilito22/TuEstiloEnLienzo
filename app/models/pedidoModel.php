<?php

require_once __DIR__ . "/../../config/DataBase.php";

class pedidoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM pedido";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM pedido WHERE id_pedido = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($id_cliente,$id_usuario,$fecha_pedido,$ciudad_entrega_pedido,$subtotal,$total,$tipo_entrega,$direccion_entrega,$ciudad_entrega,$fecha_entrega,$observacion)
    {
        try {
            $sql="INSERT INTO pedido (id_cliente,id_usuario,fecha_pedido,estado_pedido,subtotal,total,tipo_entrega,direccion_entrega,ciudad_entrega,fecha_entrega,observacion)
        VALUES (:id_cliente,:id_usuario,:fecha_pedido,:estado_pedido,:subtotal,:total,:tipo_entrega,:direccion_entrega,:ciudad_entrega,:fecha_entrega,:observacion)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":id_cliente", $id_cliente);
        $consulta->bindparam(":id_usuario", $id_usuario);
        $consulta->bindparam(":fecha_pedido", $fecha_pedido);
        $consulta->bindparam(":estado_pedido", $estado_pedido);
        $consulta->bindparam(":subtotal", $subtotal);
        $consulta->bindparam(":total", $total);
        $consulta->bindparam(":tipo_entrega", $tipo_entrega);
        $consulta->bindparam(":direccion_entrega", $direccion_entrega);
        $consulta->bindparam(":ciudad_entrega", $ciudad_entrega);
        $consulta->bindparam(":fecha_entrega", $fecha_entrega);
        $consulta->bindparam(":observacion", $observacion);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el pedido" . $id_cliente ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}