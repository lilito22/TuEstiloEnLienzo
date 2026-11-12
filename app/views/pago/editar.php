<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/pagos/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($pago['id_pago'] ?? '') ?>">

<label for="id_pedido">id_pedido</label>
<input type="number" name="id_pedido" value="<?= htmlspecialchars($pago['id_pedido'] ?? '') ?>">

<label for="fecha_pago">fecha_pago</label>
<input type="text" name="fecha_pago" value="<?= htmlspecialchars($pago['fecha_pago'] ?? '') ?>">

<label for="monto">monto</label>
<input type="text" name="monto" value="<?= htmlspecialchars($pago['monto'] ?? '') ?>">

<label for="metodo_pago">metodo_pago</label>
<input type="text" name="metodo_pago" value="<?= htmlspecialchars($pago['metodo_pago'] ?? '') ?>">

<label for="tipo_movimiento">tipo_movimiento</label>
<input type="text" name="tipo_movimiento" value="<?= htmlspecialchars($pago['tipo_movimiento'] ?? '') ?>">

<label for="referencia">referencia</label>
<input type="text" name="referencia" value="<?= htmlspecialchars($pago['referencia'] ?? '') ?>">

<label for="observacion">observacion</label>
<input type="observacion" name="observacion" value="<?= htmlspecialchars($pago['observacion'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>