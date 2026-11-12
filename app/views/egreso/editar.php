<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/egresos/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($egreso['id_egreso'] ?? '') ?>">

<label for="fecha_egreso">fecha_egreso</label>
<input type="text" name="fecha_egreso" value="<?= htmlspecialchars($egreso['fecha_egreso'] ?? '') ?>">

<label for="concepto">concepto</label>
<input type="text" name="concepto" value="<?= htmlspecialchars($egreso['concepto'] ?? '') ?>">

<label for="id_tipo_egreso">id_tipo_egreso</label>
<input type="number" name="id_tipo_egreso" value="<?= htmlspecialchars($egreso['id_tipo_egreso'] ?? '') ?>">

<label for="valor">valor</label>
<input type="decimal" name="valor" value="<?= htmlspecialchars($egreso['valor'] ?? '') ?>">

<label for="observacion">observacion</label>
<input type="text" name="observacion" value="<?= htmlspecialchars($egreso['observacion'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>