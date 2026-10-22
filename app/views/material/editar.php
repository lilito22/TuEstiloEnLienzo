<h1>Actualizando Datos</h1>

<form action="/material/editar" method="POST">

<input type="hidden name= "id" value="<?= $material->id ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= $material->nombre ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= $material->descripcion ?>">

<label for="unidad_medida">unidad_medida</label>
<input type="text" name="unidad_medida" value="<?= $material->unidad_medida ?>">

<label for="costo_unitario">costo_unitario</label>
<input type="text" name="costo_unitario" value="<?= $material->costo_unitario ?>">

<label for="estado">estado</label>
<input type="text" name="estado" value="<?= $material->estado ?>">

<button type = "submit">Guardar</button>
</form>