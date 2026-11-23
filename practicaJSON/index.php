<?php

$productos = [
    ["id"=>1, "nombre"=>"Mouse inalámbrico", "precio"=>35000, "stock"=>12, "disponible"=>true],
    ["id"=>2, "nombre"=>"Teclado mecánico", "precio"=>165000, "stock"=>8, "disponible"=>true],
    ["id"=>3, "nombre"=>"Monitor de 24 pulgadas", "precio"=>780000, "stock"=>6, "disponible"=>true],
    ["id"=>4, "nombre"=>"Cable USB-C", "precio"=>25000, "stock"=>30, "disponible"=>true]
];

echo json_encode($productos, JSON_PRETTY_PRINT);

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

foreach ($productos as &$producto) {

    if ($producto["id"] == 1) {
        $producto["precio"] = 50000;
    }
}

unset($producto);

$nuevoJson = json_encode($productos, JSON_PRETTY_PRINT);

echo $nuevoJson;

file_put_contents("productos.json", $nuevoJson);

?>