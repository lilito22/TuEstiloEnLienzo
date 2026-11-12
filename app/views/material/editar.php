<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/materiales/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($material['id_material'] ?? '') ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= htmlspecialchars($material['nombre'] ?? '') ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= htmlspecialchars($material['descripcion'] ?? '') ?>">

<label for="unidad_medida">unidad_medida</label>
<input type="text" name="unidad_medida" value="<?= htmlspecialchars($material['unidad_medida'] ?? '') ?>">

<label for="costo_unitario">costo_unitario</label>
<input type="text" name="costo_unitario" value="<?= htmlspecialchars($material['costo_unitario'] ?? '') ?>">

<label for="estado">estado</label>
<input type="text" name="estado" value="<?= htmlspecialchars($material['estado'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>