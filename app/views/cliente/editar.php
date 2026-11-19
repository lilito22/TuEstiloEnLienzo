<h1>Actualizando Datos</h1>

<form action="/cliente/editar" method="POST">

<input type="hidden" name="id" value="<?= $cliente['id_cliente'] ?>">

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="<?= $cliente['nombre'] ?>">

<label for="apellido">apellido</label>
<input type="text" name="apellido" value="<?= $cliente['apellido'] ?>">

<label for="telefono">telefono</label>
<input type="text" name="telefono" value="<?= $cliente['telefono'] ?>">

<label for="correo">correo</label>
<input type="text" name="correo" value="<?= $cliente['correo'] ?>">

<label for="direccion">direccion</label>
<input type="text" name="direccion" value="<?= $cliente['direccion'] ?>">

<label for="ciudad">ciudad</label>
<input type="text" name="ciudad" value="<?= $cliente['ciudad'] ?>">

<label for="estado">estado</label>
<input type="text" name="estado" value="<?= $cliente['estado'] ?>">

<button type = "submit">Guardar</button>
</form>