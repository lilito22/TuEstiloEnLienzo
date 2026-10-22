<h1>Actualizando Datos</h1>

<form action="/pedido/editar" method="POST">

<input type="hidden name= "id" value="<?= $pedido->id ?>">

<label for="id_cliente">id_cliente</label>
<input type="number" name="id_cliente" value="<?= $pedido->id_cliente ?>">

<label for="id_usuario">id_usuario</label>
<input type="number" name="id_usuario" value="<?= $pedido->id_usuario ?>">

<label for="fecha_pedido">fecha_pedido</label>
<input type="text" name="fecha_pedido" value="<?= $pedido->fecha_pedido ?>">

<label for="estado_pedido">estado_pedido</label>
<input type="text" name="estado_pedido" value="<?= $pedido->estado_pedido ?>">

<label for="subtotal">subtotal</label>
<input type="text" name="subtotal" value="<?= $pedido->subtotal ?>">

<label for="total">total</label>
<input type="text" name="total" value="<?= $pedido->total ?>">

<label for="tipo_entrega">tipo_entrega</label>
<input type="tipo_entrega" name="tipo_entrega" value="<?= $pedido->tipo_entrega ?>">

<label for="direccion_entrega">direccion_entrega</label>
<input type="text" name="direccion_entrega" value="<?= $pedido->direccion_entrega ?>">

<label for="ciudad_entrega">ciudad_entrega</label>
<input type="text" name="ciudad_entrega" value="<?= $pedido->ciudad_entrega ?>">

<label for="fecha_entrega">fecha_entrega</label>
<input type="text" name="fecha_entrega" value="<?= $pedido->fecha_entrega ?>">

<label for="observacion">observacion</label>
<input type="text" name="observacion" value="<?= $pedido->observacion ?>">

<button type = "submit">Guardar</button>
</form>