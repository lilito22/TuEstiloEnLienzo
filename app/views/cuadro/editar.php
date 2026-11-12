<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/cuadro/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($cuadro['id_cuadro'] ?? '') ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= htmlspecialchars($cuadro['nombre'] ?? '') ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= htmlspecialchars($cuadro['descripcion'] ?? '') ?>">

<label for="alto">alto</label>
<input type="text" name="alto" value="<?= htmlspecialchars($cuadro['alto'] ?? '') ?>">

<label for="ancho">ancho</label>
<input type="text" name="ancho" value="<?= htmlspecialchars($cuadro['ancho'] ?? '') ?>">

<label for="precio_costo">precio_costo</label>
<input type="text" name="precio_costo" value="<?= htmlspecialchars($cuadro['precio_costo'] ?? '') ?>">

<label for="precio_venta">precio_venta</label>
<input type="text" name="precio_venta" value="<?= htmlspecialchars($cuadro['precio_venta'] ?? '') ?>">

<label for="imagen">imagen</label>
<input type="text" name="imagen" value="<?= htmlspecialchars($cuadro['imagen'] ?? '') ?>">

<label for="material">material</label>
<input type="text" name="material" value="<?= htmlspecialchars($cuadro['material'] ?? '') ?>">

<label for="estado">estado</label>
<input type="text" name="estado" value="<?= htmlspecialchars($cuadro['estado'] ?? '') ?>">

<label for="id_material_cuadro">id_material_cuadro</label>
<input type="text" name="id_material_cuadro" value="<?= htmlspecialchars($cuadro['id_material_cuadro'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>