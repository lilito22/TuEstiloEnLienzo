<h1>Actualizando Datos</h1>

<form action="/tipo_egreso/editar" method="POST">

<input type="hidden name= "id" value="<?= $tipo_egreso->id ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= $tipo_egreso->nombre ?>">

<label for="descripcion">descripcion</label>
<input type="text" name="descripcion" value="<?= $tipo_egreso->descripcion ?>">

<button type = "submit">Guardar</button>
</form>