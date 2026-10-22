<h1>Creando los pagos</h1>
<form action = "/pago " method = "POST">

    <label for ="id_pedido">id_pedido: </label>
    <input placeholder="id_pedido" type = "number" name = "id_pedido"></input>

    <label for ="fecha_pago">fecha_pago: </label>
    <input placeholder="fecha_pago" type = "text" name = "fecha_pago"></input>

    <label for ="monto">monto: </label>
    <input placeholder="monto" type = "text" name = "monto"></input>

    <label for ="metodo_pago">metodo_pago: </label>
    <input placeholder="metodo_pago" type = "text" name = "metodo_pago"></input>

    <label for ="tipo_movimiento">tipo_movimiento: </label>
    <input placeholder="tipo_movimiento" type = "text" name = "tipo_movimiento"></input>

    <label for ="referencia">referencia: </label>
    <input placeholder="referencia " type = "text" name = "referencia"></input>

    <label for ="observacion">observacion: </label>
    <input placeholder="observacion" type = "text" name = "observacion"></input>

    <button type = "submit">Guardar</button>
</form>