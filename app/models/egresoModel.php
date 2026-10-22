<?php

require_once __DIR__ . "/../../config/DataBase.php";

class egresoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM egreso";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM egreso WHERE id_egreso = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($fecha_egreso,$concepto,$id_tipo_egreso,$valor,$observacion)
    {
        try {
            $sql="INSERT INTO egreso (fecha_egreso,concepto,id_tipo_egreso,valor,observacion)
        VALUES (:fecha_egreso,:concepto,:id_tipo_egreso,:valor,:observacion)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":fecha_egreso", $fecha_egreso);
        $consulta->bindparam(":concepto", $concepto);
        $consulta->bindparam(":id_tipo_egreso", $id_tipo_egreso);
        $consulta->bindparam(":valor", $valor);
        $consulta->bindparam(":observacion", $observacion);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el egreso" . $fecha_egreso ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}