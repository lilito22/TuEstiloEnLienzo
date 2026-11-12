<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/pedidos/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($pedido['id_pedido'] ?? '') ?>">

<label for="id_cliente">id_cliente</label>
<input type="number" name="id_cliente" value="<?= htmlspecialchars($pedido['id_cliente'] ?? '') ?>">

<label for="id_usuario">id_usuario</label>
<input type="number" name="id_usuario" value="<?= htmlspecialchars($pedido['id_usuario'] ?? '') ?>">

<label for="fecha_pedido">fecha_pedido</label>
<input type="text" name="fecha_pedido" value="<?= htmlspecialchars($pedido['fecha_pedido'] ?? '') ?>">

<label for="estado_pedido">estado_pedido</label>
<input type="text" name="estado_pedido" value="<?= htmlspecialchars($pedido['estado_pedido'] ?? '') ?>">

<label for="subtotal">subtotal</label>
<input type="text" name="subtotal" value="<?= htmlspecialchars($pedido['subtotal'] ?? '') ?>">

<label for="total">total</label>
<input type="text" name="total" value="<?= htmlspecialchars($pedido['total'] ?? '') ?>">

<label for="tipo_entrega">tipo_entrega</label>
<input type="tipo_entrega" name="tipo_entrega" value="<?= htmlspecialchars($pedido['tipo_entrega'] ?? '') ?>">

<label for="direccion_entrega">direccion_entrega</label>
<input type="text" name="direccion_entrega" value="<?= htmlspecialchars($pedido['direccion_entrega'] ?? '') ?>">

<label for="ciudad_entrega">ciudad_entrega</label>
<input type="text" name="ciudad_entrega" value="<?= htmlspecialchars($pedido['ciudad_entrega'] ?? '') ?>">

<label for="fecha_entrega">fecha_entrega</label>
<input type="text" name="fecha_entrega" value="<?= htmlspecialchars($pedido['fecha_entrega'] ?? '') ?>">

<label for="observacion">observacion</label>
<input type="text" name="observacion" value="<?= htmlspecialchars($pedido['observacion'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>