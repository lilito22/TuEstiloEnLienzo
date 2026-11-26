<?php

$productos = [
    ["id"=>1, "nombre"=>"Mouse inalámbrico", "precio"=>35000, "stock"=>12, "disponible"=>true],
    ["id"=>2, "nombre"=>"Teclado mecánico", "precio"=>165000, "stock"=>8, "disponible"=>true],
    ["id"=>3, "nombre"=>"Monitor de 24 pulgadas", "precio"=>780000, "stock"=>6, "disponible"=>true],
    ["id"=>4, "nombre"=>"Cable USB-C", "precio"=>25000, "stock"=>30, "disponible"=>true]
];

echo json_encode($productos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>

<br><br>

<?php

$json = file_get_contents("productos.json");

$productos = json_decode($json, true);

foreach ($productos as $producto) {

    echo $producto["nombre"]." - $".$producto["precio"]."<br>";

    if ($producto["precio"] > 100000) {
        echo "Precio superior a $100.000<br><br>";
    }
}

?>

<br><br>

<?php

$json = file_get_contents("productos.json");
$productos = json_decode($json, true);

$idBuscar = 1;

foreach ($productos as &$producto) {

    if ($producto["id"] == $idBuscar) {

        // 3. Modificar el precio
        $producto["precio"] = 50000;

        echo "Precio actualizado correctamente.<br>";
    }
}

unset($producto);

$nuevoJson = json_encode($productos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo "<pre>";
echo $nuevoJson;
echo "</pre>";

?>