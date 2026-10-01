<h1>Creando un Cuadro</h1>
<form action = "/cuadro" method = "POST">
    
    <label for ="nombre">Nombre: </label>
    <input placeholder="nombre" type ="text" name = "nombre"></input>
    
    <label for ="descripcion">descripción: </label>
    <input placeholder="descripcion" type = "text" name = "descripcion"></input>
    
    <label for ="alto">Alto: </label>
    <input placeholder="alto"   type = "text" name = "alto"></input>

    <label for ="ancho">Ancho: </label>
    <input placeholder="ancho" type = "text" name = "ancho"></input>

    <label for ="precio_costo">Precio_costo: </label>
    <input placeholder="precio_costo" type = "number" name = "precio_costo"></input>

    <label for ="precio_venta">Precio_venta: </label>
    <input placeholder="precio_venta" type = "number" name = "precio_venta"></input>

    <label for ="imagen">Imagen: </label>
    <input placeholder="imagen" type = "text" name = "imagen"></input>

    <label for ="material">Material: </label>
    <input placeholder="material" type = "text" name = "material"></input>

    <label for ="estado">Estado: </label>
    <input placeholder="estado" type = "text" name = "estado"></input>

    <label for ="id_material_cuadro">id_material_cuadro: </label>
    <input placeholder="id_material_cuadro" type = "text" name = "id_material_cuadro"></input>
    
    <button type = "submit">Guardar</button>
</form>