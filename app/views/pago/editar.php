<h1>Actualizando Datos</h1>

<form action="/pago/editar" method="POST">

<input type="hidden name= "id" value="<?= $pago->id ?>">

<label for="id_pedido">id_pedido</label>
<input type="number" name="id_pedido" value="<?= $pago->id_pedido ?>">

<label for="fecha_pago">fecha_pago</label>
<input type="text" name="fecha_pago" value="<?= $pago->fecha_pago ?>">

<label for="monto">monto</label>
<input type="text" name="monto" value="<?= $pago->monto ?>">

<label for="metodo_pago">metodo_pago</label>
<input type="text" name="metodo_pago" value="<?= $pago->metodo_pago ?>">

<label for="tipo_movimiento">tipo_movimiento</label>
<input type="text" name="tipo_movimiento" value="<?= $pago->tipo_movimiento ?>">

<label for="referencia">referencia</label>
<input type="text" name="referencia" value="<?= $pago->referencia ?>">

<label for="observacion">observacion</label>
<input type="observacion" name="observacion" value="<?= $pago->observacion ?>">

<button type = "submit">Guardar</button>
</form>