<?php

require_once __DIR__ . "/../../config/DataBase.php";

class tipo_egresoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM tipo_egreso";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM tipo_egreso WHERE id_tipo_egreso = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre,$descripcion)
    {
        try {
            $sql="INSERT INTO tipo_egreso (nombre,descripcion)
        VALUES (:nombre,:descripcion)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":nombre", $nombre);
        $consulta->bindparam(":descripcion", $descripcion);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el tipo de egreso" . $nombre ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}