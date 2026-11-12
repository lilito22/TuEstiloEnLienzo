<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/tipo_egresos/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($tipo_egreso['id_tipo_egreso'] ?? '') ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= htmlspecialchars($tipo_egreso['nombre'] ?? '') ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= htmlspecialchars($tipo_egreso['descripcion'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>