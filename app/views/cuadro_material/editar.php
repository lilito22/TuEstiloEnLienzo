<h1>Actualizando Datos</h1>

<form action="/cuadro_material/editar" method="POST">

<input type="hidden name= "id" value="<?= $cuadro_material->id ?>">

<label for="id_material">id_material</label>
<input type="number" name="id_material" value="<?= $cuadro_material->id_material ?>">

<label for="cantidad">cantidad</label>
<input type="text" name="cantidad" value="<?= $cuadro_material->cantidad ?>">

<label for="subtotal_costo">subtotal_costo</label>
<input type="decimal" name="subtotal_costo" value="<?= $cuadro_material->subtotal_costo ?>">

<button type = "submit">Guardar</button>
</form>