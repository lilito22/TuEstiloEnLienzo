<h1>Creando un DetallePedido</h1>
<form action = "/detalle_pedido " method = "POST">

    <label for ="nombre">Nombre: </label>
    <input placeholder="nombre" type = "number" name = "id_pedido"></input>

    <label for ="id_cuadro">id_cuadro: </label>
    <input placeholder="id_cuadro" type = "number" name = "id_cuadro"></input>

    <label for ="descripcion">Descripcion: </label>
    <input placeholder="descripcion" type = "text" name = "descripcion"></input>

    <label for ="alto">Alto: </label>
    <input placeholder="alto" type = "text" name = "alto"></input>

    <label for ="ancho">Ancho: </label>
    <input placeholder="ancho" type = "text" name = "ancho"></input>

    <label for ="cantidad">Cantidad: </label>
    <input placeholder="cantidad" type = "text" name = "cantidad"></input>

    <label for ="precio_unitario">Precio_unitario: </label>
    <input placeholder="precio_unitario" type = "text" name = "precio_unitario"></input>

    <label for ="subtotal">Subtotal: </label>
    <input placeholder="subtotal" type = "text" name = "subtotal"></input>

    <button type = "submit">Guardar</button>
</form>