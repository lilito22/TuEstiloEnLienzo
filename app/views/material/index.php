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
<h1>Listado de materiales</h1>
<?php if (!empty($materiales)){ ?>

<table>
    <tr>
        <th>id_material</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>unidad_medida</th>
        <th>costo_unitario</th>
        <th>estado</th>
    </tr>

    <?php foreach ($materiales as $material): ?>
    <tr>
        <td><?= $material['id_material'] ?></td>
        <td><?= $material['nombre'] ?></td>
        <td><?= $material['descripcion'] ?></td>
        <td><?= $material['unidad_medida'] ?></td>
        <td><?= $material['costo_unitatio'] ?></td>
        <td><?= $material['estado'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay materials para mostrar</p>
<?php } ?>

<h1>material consultado</h1>
<?php if (!empty($materialConsultado)){ ?>

<table>
    <tr>
        <th>nombre</th>
        <th>descripcion</th>
    </tr>
    <tr>
        <td><?= $materialConsultado['nombre'] ?></td>
        <td><?= $materialConsultado['descripcion'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay materiales consultados para mostrar</p>
<?php } ?>