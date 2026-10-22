<?php

require_once __DIR__ . "/../../config/DataBase.php";

class detalle_pedidoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM detalle_pedido";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM detalle_pedido WHERE id_detalle_pedido = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

     public function guardar($nombre,$id_cuadro,$descripcion,$alto,$ancho,$cantidad,$precio_unitario,$subtotal)
    {
        try {
            $sql="INSERT INTO detalle_pedido (nombre,id_cuadro,descripcion,alto,ancho,cantidad,precio_unitario,subtotal)
        VALUES (:nombre,:id_cuadro,:descripcion,:alto,:ancho,:cantidad,:precio_unitario,:subtotal)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":nombre", $nombre);
        $consulta->bindparam(":id_cuadro", $id_cuadro);
        $consulta->bindparam(":descripcion", $descripcion);
        $consulta->bindparam(":alto", $alto);
        $consulta->bindparam(":ancho", $ancho);
        $consulta->bindparam(":cantidad", $cantidad);
        $consulta->bindparam(":precio_unitario", $precio_unitario);
        $consulta->bindparam(":subtotal", $subtotal);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el detalle del pedido" . $nombre ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}