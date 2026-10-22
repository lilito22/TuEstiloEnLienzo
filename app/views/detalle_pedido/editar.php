<h1>Actualizando Datos</h1>

<form action="/detalle_pedido/editar" method="POST">

<input type="hidden name= "id" value="<?= $detalle_pedido->id ?>">

<label for="id_pedido">id_pedido</label>
<input type="text" name="id_pedido" value="<?= $detalle_pedido->detalle_pedido ?>">

<label for="id_cuadro">id_cuadro</label>
<input type="text" name="id_cuadro" value="<?= $detalle_pedido->id_cuadro ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= $detalle_pedido->descripcion ?>">

<label for="alto">alto</label>
<input type="text" name="alto" value="<?= $detalle_pedido->alto ?>">

<label for="ancho">ancho</label>
<input type="text" name="ancho" value="<?= $detalle_pedido->ancho ?>">

<label for="cantidad">cantidad</label>
<input type="text" name="cantidad" value="<?= $detalle_pedido->cantidad ?>">

<label for="precio_unitario">precio_unitario</label>
<input type="precio_unitario" name="precio_unitario" value="<?= $detalle_pedido->precio_unitario ?>">

<label for="subtotal">subtotal</label>
<input type="text" name="subtotal" value="<?= $detalle_pedido->subtotal ?>">

<button type = "submit">Guardar</button>
</form>