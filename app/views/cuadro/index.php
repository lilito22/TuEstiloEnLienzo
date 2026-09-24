<style>
    table {
        width: auto;
        border-collapse: collapse;
        margin-bottom: 30px;
        font-size: 13px;
    }
    th, td {
        border: 1px solid #c2a2e1;
        padding: 2px 10px;
        text-align: left;
    }
    th {
        background-color: #b691db;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #dcbaff7d;
    }
</style>
 
<h1>Listado de cuadros</h1>
<?php if (!empty($cuadros)){ ?>

<table>
    <tr>
        <th>id_cuadro</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>alto</th>
        <th>ancho</th>
        <th>precio_costo</th>
        <th>precio_venta</th>
        <th>imagen</th>
        <th>material</th>
        <th>estado</th>
        <th>id_material_cuadro</th>
    </tr>

    <?php foreach ($cuadros as $cuadro): ?>
    <tr>
        <td><?= $cuadro['id_cuadro'] ?></td>
        <td><?= $cuadro['nombre'] ?></td>
        <td><?= $cuadro['descripcion'] ?></td>
        <td><?= $cuadro['alto'] ?></td>
        <td><?= $cuadro['ancho'] ?></td>
        <td><?= $cuadro['precio_costo'] ?></td>
        <td><?= $cuadro['precio_venta'] ?></td>
        <td><?= $cuadro['imagen'] ?></td>
        <td><?= $cuadro['material'] ?></td>
        <td><?= $cuadro['estado'] ?></td>
        <td><?= $cuadro['id_material_cuadro'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay cuadros para mostrar</p>
<?php } ?>

<h1>cuadro consultado</h1>
<?php if (!empty($cuadroConsultado)){ ?>

<table>
    <tr>
        <th>nombre</th>
        <th>precio_venta</th>
    </tr>
    <tr>
        <td><?= $cuadroConsultado['nombre'] ?></td>
        <td><?= $cuadroConsultado['precio_venta'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay cuadros consultados para mostrar</p>
<?php } ?>