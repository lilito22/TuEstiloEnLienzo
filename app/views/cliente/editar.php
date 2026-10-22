<h1>Actualizando Datos</h1>

<form action="/cliente/editar" method="POST">

<input type="hidden name= "id" value="<?= $cliente->id ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= $cliente->nombre ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= $cliente->descripcion ?>">

<label for="alto">alto</label>
<input type="text" name="alto" value="<?= $cliente->alto ?>">

<label for="ancho">ancho</label>
<input type="text" name="ancho" value="<?= $cliente->ancho ?>">

<label for="precio_costo">precio_costo</label>
<input type="text" name="precio_costo" value="<?= $cliente->precio_costo ?>">

<label for="precio_venta">precio_venta</label>
<input type="text" name="alto" value="<?= $cliente->precio_venta ?>">

<label for="imagen">imagen</label>
<input type="imagen" name="imagen" value="<?= $cliente->imagen ?>">

<label for="material">material</label>
<input type="text" name="material" value="<?= $cliente->material ?>">

<label for="estado">estado</label>
<input type="text" name="estado" value="<?= $cliente->estado ?>">

<label for="id_material_cliente">id_material_cliente</label>
<input type="text" name="id_material_cliente" value="<?= $cliente->id_material_cliente ?>">

<button type = "submit">Guardar</button>
</form>