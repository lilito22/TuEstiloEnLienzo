<h1>Actualizando Datos</h1>

<form action="/cuadro/editar" method="POST">

<input type="hidden name= "id" value="<?= $cuadro->id ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= $cuadro->nombre ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= $cuadro->descripcion ?>">

<label for="alto">alto</label>
<input type="text" name="alto" value="<?= $cuadro->alto ?>">

<label for="ancho">ancho</label>
<input type="text" name="ancho" value="<?= $cuadro->ancho ?>">

<label for="precio_costo">precio_costo</label>
<input type="text" name="precio_costo" value="<?= $cuadro->precio_costo ?>">

<label for="precio_venta">precio_venta</label>
<input type="text" name="alto" value="<?= $cuadro->precio_venta ?>">

<label for="imagen">imagen</label>
<input type="imagen" name="imagen" value="<?= $cuadro->imagen ?>">

<label for="material">material</label>
<input type="text" name="material" value="<?= $cuadro->material ?>">

<label for="estado">estado</label>
<input type="text" name="estado" value="<?= $cuadro->estado ?>">

<label for="id_material_cuadro">id_material_cuadro</label>
<input type="text" name="id_material_cuadro" value="<?= $cuadro->id_material_cuadro ?>">

<button type = "submit">Guardar</button>
</form>