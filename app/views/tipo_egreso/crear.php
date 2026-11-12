<h1>Creando un tipo_egreso</h1>
<form action="<?= APP_BASE_PATH ?>/tipo_egresos" method="POST">

    <label for ="nombre">Nombre: </label>
    <input placeholder="nombre" type = "text" name = "nombre"></input>

    <label for ="descripcion">descripción: </label>
    <input placeholder="descripcion" type = "text" name = "descripcion"></input>

    <button type = "submit">Guardar</button>
</form>