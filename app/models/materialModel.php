<?php

require_once __DIR__ . "/../../config/DataBase.php";

class materialModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM material";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM material WHERE id_material = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre,$descripcion,$unidad_medida,$costo_unitario,$estado)
    {
        try {
            $sql="INSERT INTO material (nombre,descripcion,unidad_medida,costo_unitario,estado)
        VALUES (:nombre,:descripcion,:unidad_medida,:costo_unitario,:estado)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":nombre", $nombre);
        $consulta->bindparam(":descripcion", $descripcion);
        $consulta->bindparam(":unidad_medida", $unidad_medida);
        $consulta->bindparam(":costo_unitario", $costo_unitario);
        $consulta->bindparam(":estado", $estado);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el material" . $nombre ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}