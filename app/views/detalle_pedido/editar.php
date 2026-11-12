<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/detalle_pedido/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($detalle_pedido['id_detalle_pedido'] ?? '') ?>">

<label for="id_pedido">id_pedido</label>
<input type="text" name="id_pedido" value="<?= htmlspecialchars($detalle_pedido['id_pedido'] ?? '') ?>">

<label for="id_cuadro">id_cuadro</label>
<input type="text" name="id_cuadro" value="<?= htmlspecialchars($detalle_pedido['id_cuadro'] ?? '') ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= htmlspecialchars($detalle_pedido['descripcion'] ?? '') ?>">

<label for="alto">alto</label>
<input type="text" name="alto" value="<?= htmlspecialchars($detalle_pedido['alto'] ?? '') ?>">

<label for="ancho">ancho</label>
<input type="text" name="ancho" value="<?= htmlspecialchars($detalle_pedido['ancho'] ?? '') ?>">

<label for="cantidad">cantidad</label>
<input type="text" name="cantidad" value="<?= htmlspecialchars($detalle_pedido['cantidad'] ?? '') ?>">

<label for="precio_unitario">precio_unitario</label>
<input type="text" name="precio_unitario" value="<?= htmlspecialchars($detalle_pedido['precio_unitario'] ?? '') ?>">

<label for="subtotal">subtotal</label>
<input type="text" name="subtotal" value="<?= htmlspecialchars($detalle_pedido['subtotal'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>