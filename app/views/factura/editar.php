<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/facturas/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($factura['id_factura'] ?? '') ?>">

<label for="id_pedido">id_pedido</label>
<input type="number" name="id_pedido" value="<?= htmlspecialchars($factura['id_pedido'] ?? '') ?>">

<label for="numero_factura">numero_factura</label>
<input type="text" name="numero_factura" value="<?= htmlspecialchars($factura['numero_factura'] ?? '') ?>">

<label for="fecha_factura">fecha_factura</label>
<input type="text" name="fecha_factura" value="<?= htmlspecialchars($factura['fecha_factura'] ?? '') ?>">

<label for="subtotal">subtotal</label>
<input type="decimal" name="subtotal" value="<?= htmlspecialchars($factura['subtotal'] ?? '') ?>">

<label for="impuesto">impuesto</label>
<input type="decimal" name="impuesto" value="<?= htmlspecialchars($factura['impuesto'] ?? '') ?>">

<label for="total_factura">total_factura</label>
<input type="decimal" name="total_factura" value="<?= htmlspecialchars($factura['total_factura'] ?? '') ?>">

<label for="estado_factura">estado_factura</label>
<input type="text" name="estado_factura" value="<?= htmlspecialchars($factura['estado_factura'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>