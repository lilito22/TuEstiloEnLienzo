<?php

require_once __DIR__ . "/../../config/DataBase.php";

class clienteModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM cliente";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM cliente WHERE id_cliente = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre,$apellido,$telefono,$correo,$direccion,$ciudad,$estado)
    {
        try {
            $sql="INSERT INTO cliente (nombre,apellido,telefono,correo,direccion,ciudad,estado)
        VALUES (:nombre,:apellido,:telefono,:correo,:direccion,:ciudad,:estado)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":nombre", $nombre);
        $consulta->bindparam(":apellido", $apellido);
        $consulta->bindparam(":telefono", $telefono);
        $consulta->bindparam(":correo", $correo);
        $consulta->bindparam(":direccion", $direccion);
        $consulta->bindparam(":ciudad", $ciudad);
        $consulta->bindparam(":estado", $estado);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el cliente" . $nombre ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}