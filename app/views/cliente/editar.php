<h1>Actualizando Datos</h1>
<form action="<?= APP_BASE_PATH ?>/cliente/editar" method="POST">
<input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id_cliente'] ?? '') ?>">
<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= htmlspecialchars($cliente['nombre'] ?? '') ?>">
<label for="apellido">apellido</label>
<input type="text" name="apellido" value="<?= htmlspecialchars($cliente['apellido'] ?? '') ?>">
<label for="telefono">telefono</label>
<input type="number" name="telefono" value="<?= htmlspecialchars($cliente['telefono'] ?? '') ?>">
<label for="correo">correo</label>
<input type="text" name="correo" value="<?= htmlspecialchars($cliente['correo'] ?? '') ?>">
<label for="direccion">direccion</label>
<input type="text" name="direccion" value="<?= htmlspecialchars($cliente['direccion'] ?? '') ?>">
<label for="ciudad">ciudad</label>
<input type="text" name="ciudad" value="<?= htmlspecialchars($cliente['ciudad'] ?? '') ?>">
<label for="estado">estado</label>
<input type="text" name="estado" value="<?= htmlspecialchars($cliente['estado'] ?? '') ?>">
<button type="submit">Guardar</button>
</form>
