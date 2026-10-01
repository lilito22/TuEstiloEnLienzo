<h1>Creando un Cuadro_material</h1>
<form action = "/cuadro_material " method = "POST">

    <label for ="id_material">Id_material: </label>
    <input placeholder="id_material" type = "number" name = "id_material"></input>

    <label for ="cantidad">Cantidad: </label>
    <input placeholder="cantidad" type = "text" name = "cantidad"></input>

    <label for ="subtotal_costo">Subtotal_costo: </label>
    <input placeholder="subtotal_costo" type = "decimal" name = "subtotal_costo"></input>

    <button type = "submit">Guardar</button>
</form>