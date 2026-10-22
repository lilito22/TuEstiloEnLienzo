<h1>Creando un egreso</h1>
<form action = "/egreso " method = "POST">
    
    <label for="fecha_egreso">fecha_egreso: </label>
    <input placeholder="fecha_egreso" type = "text" name = "fecha_egreso"></input>

    <label for="concepto">concepto: </label>
    <input placeholder="concepto" type = "text" name = "concepto"></input>

    <label for="id_tipo_egreso">id_tipo_egreso: </label>
    <input placeholder="id_tipo_egreso" type = "number" name = "id_tipo_egreso"></input>

    <label for="valor">valor: </label>
    <input type = "decimal" name = "valor"></input>

    <label for="observacion">observacion: </label>
    <input type = "text" name = "observacion"></input>

    <button type = "submit">Guardar</button>
</form>