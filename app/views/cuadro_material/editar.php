<h1>Actualizando Datos</h1>

<form action="<?= APP_BASE_PATH ?>/cuadro_material/editar" method="POST">

<input type="hidden" name="id" value="<?= htmlspecialchars($cuadro_material['id_cuadro_material'] ?? '') ?>">

<label for="id_material">id_material</label>
<input type="number" name="id_material" value="<?= htmlspecialchars($cuadro_material['id_material'] ?? '') ?>">

<label for="cantidad">cantidad</label>
<input type="text" name="cantidad" value="<?= htmlspecialchars($cuadro_material['cantidad'] ?? '') ?>">

<label for="subtotal_costo">subtotal_costo</label>
<input type="decimal" name="subtotal_costo" value="<?= htmlspecialchars($cuadro_material['subtotal_costo'] ?? '') ?>">

<button type = "submit">Guardar</button>
</form>