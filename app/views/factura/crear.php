<h1>Creando una factura</h1>
<form action = "/factura " method = "POST">

    <label for ="id_pedido">id_pedido: </label>
    <input placeholder="id_pedido" type = "number" name = "id_pedido"></input>

    <label for ="numero_factura">numero_factura: </label>
    <input placeholder="numero_factura" type = "text" name = "numero_factura"></input>

    <label for ="fecha_factura">fecha_factura: </label>
    <input placeholder="fecha_factura" type = "text" name = "fecha_factura"></input>

    <label for ="subtotal">subtotal: </label>
    <input placeholder="subtotal" type = "decimal" name = "subtotal"></input>

    <label for ="impuesto">impuesto: </label>
    <input placeholder="impuesto" type = "decimal" name = "impuesto"></input>

    <label for ="total_factura">total_factura: </label>
    <input placeholder="total_factura" type = "decimal" name = "total_factura"></input>

    <label for ="estado_factura">estado_factura: </label>
    <input placeholder="estado_factura" type = "text" name = "estado_factura"></input>

    <button type = "submit">Guardar</button>
</form>