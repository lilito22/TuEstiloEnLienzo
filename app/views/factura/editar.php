<h1>Actualizando Datos</h1>

<form action="/factura/editar" method="POST">

<input type="hidden name= "id" value="<?= $factura->id ?>">

<label for="id_pedido">id_pedido</label>
<input type="number" name="id_pedido" value="<?= $factura->id_pedido ?>">

<label for="numero_factura">numero_factura</label>
<input type="text" name="numero_factura" value="<?= $factura->numero_factura ?>">

<label for="fecha_factura">fecha_factura</label>
<input type="text" name="fecha_factura" value="<?= $factura->fecha_factura ?>">

<label for="subtotal">subtotal</label>
<input type="decimal" name="subtotal" value="<?= $factura->subtotal ?>">

<label for="impuesto">impuesto</label>
<input type="decimal" name="impuesto" value="<?= $factura->impuesto ?>">

<label for="total_factura">total_factura</label>
<input type="decimal" name="total_factura" value="<?= $factura->total_factura ?>">

<label for="estado_factura">estado_factura</label>
<input type="estado_factura" name="estado_factura" value="<?= $factura->estado_factura ?>">

<button type = "submit">Guardar</button>
</form>