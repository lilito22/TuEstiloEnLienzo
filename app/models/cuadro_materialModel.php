<?php

require_once __DIR__ . "/../../config/DataBase.php";

class cuadro_materialModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM cuadro_material";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM cuadro_material WHERE id_cuadro_material = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($id_material,$cantidad,$subtotal_costo)
    {
        try {
            $sql="INSERT INTO cuadro_material (id_material,cantidad,subtotal_costo)
        VALUES (:id_material,:cantidad,:subtotal_costo)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":id_material", $id_material);
        $consulta->bindparam(":cantidad", $cantidad);
        $consulta->bindparam(":subtotal_costo", $subtotal_costo);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el cuadro_material" . $id_material ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}