<h1>Actualizando Datos</h1>

<form action="/egreso/editar" method="POST">

<input type="hidden name= "id" value="<?= $egreso->id ?>">

<label for="fecha_egreso">fecha_egreso</label>
<input type="text" name="fecha_egreso" value="<?= $egreso->fecha_egreso ?>">

<label for="concepto">concepto</label>
<input type="text" name="concepto" value="<?= $egreso->concepto ?>">

<label for="id_tipo_egreso">id_tipo_egreso</label>
<input type="number" name="id_tipo_egreso" value="<?= $egreso->id_tipo_egreso ?>">

<label for="valor">valor</label>
<input type="decimal" name="valor" value="<?= $egreso->valor ?>">

<label for="observacion">observacion</label>
<input type="text" name="observacion" value="<?= $egreso->observacion ?>">

<button type = "submit">Guardar</button>
</form>