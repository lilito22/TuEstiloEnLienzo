<?php

require_once __DIR__ . "/../../config/DataBase.php";

class cuadroModel {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM cuadro";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM cuadro WHERE id_cuadro = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre,$descripcion,$alto,$ancho,$precio_costo,$precio_venta,$imagen,$material,$estado,$id_material_cuadro)
    {
        try {
            $sql="INSERT INTO cuadro (nombre,descripcion,alto,ancho,precio_costo,precio_venta,imagen,material,estado,id_material_cuadro)
        VALUES (:nombre,:descripcion,:alto,:ancho,:precio_costo,:precio_venta,:imagen,:material,:estado,:id_material_cuadro)
        ";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindparam(":nombre", $nombre);
        $consulta->bindparam(":descripcion", $descripcion);
        $consulta->bindparam(":alto", $alto);
        $consulta->bindparam(":ancho", $ancho);
        $consulta->bindparam(":precio_costo", $precio_costo);
        $consulta->bindparam(":precio_venta", $precio_venta);
        $consulta->bindparam(":imagen", $imagen);
        $consulta->bindparam(":material", $material);
        $consulta->bindparam(":estado", $estado);
        $consulta->bindparam(":id_material_cuadro", $id_material_cuadro);

        return $consulta->execute();
        } catch (PDOException $e ){
            echo "Error al guardar el cuadro" . $nombre ."ERROR SQL: " .$e->getMessage();
        }
       
    }
}