<h1>Creando un pedido</h1>
<form action = "/pedido " method = "POST">

    <label for ="id_cliente">id_cliente: </label>
    <input placeholder="id_cliente" type = "number" name = "id_cliente"></input>

    <label for ="id_usuario">id_usuario: </label>
    <input placeholder="id_usuario" type = "number" name = "id_usuario"></input>

    <label for ="fecha_pedido">fecha_pedido: </label>
    <input placeholder="fecha_pedido" type = "text" name = "fecha_pedido"></input>

    <label for ="estado_pedido">estado_pedido: </label>
    <input placeholder="estado_pedido" type = "text" name = "estado_pedido"></input>

    <label for ="subtotal">subtotal: </label>
    <input placeholder="subtotal" type = "number" name = "subtotal"></input>

    <label for ="total">total: </label>
    <input placeholder="total" type = "number" name = "total"></input>

    <label for ="tipo_entrega">tipo_entrega: </label>
    <input placeholder="tipo_entrega" type = "text" name = "tipo_entrega"></input>

    <label for ="direccion_entrega">direccion_entrega: </label>
    <input placeholder="direccion_entrega" type = "text" name = "direccion_entrega"></input>

    <label for ="ciudad_entrega">ciudad_entrega: </label>
    <input placeholder="ciudad_entrega" type = "text" name = "ciudad_entrega"></input>

    <label for ="fecha_entrega">fecha_entrega: </label>
    <input placeholder="fecha_entrega" type = "text" name = "fecha_entrega"></input>

    <label for ="observacion">observacion: </label>
    <input placeholder="observacion" type = "text" name = "observacion"></input>
    
    <button type = "submit">Guardar</button>
</form>