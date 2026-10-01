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
<h1>Listado de cuadro_materiales</h1>
<?php if (!empty($cuadro_materiales)){ ?>

<table>
    <tr>
        <th>id_cuadro_material</th>
        <th>id_material</th>
        <th>cantidad</th>
        <th>subtotal_costo</th>
    </tr>

    <?php foreach ($cuadro_materiales as $cuadro_material): ?>
    <tr>
        <td><?= $cuadro_material['id_cuadro_material'] ?></td>
        <td><?= $cuadro_material['id_material'] ?></td>
        <td><?= $cuadro_material['cantidad'] ?></td>
        <td><?= $cuadro_material['subtotal_costo'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay cuadro_materiales para mostrar</p>
<?php } ?>

<h1>cuadro_material consultado</h1>
<?php if (!empty($cuadro_materialConsultado)){ ?>

<table>
    <tr>
        <th>cantidad</th>
        <th>subtotal_costo</th>
    </tr>
    <tr>
        <td><?= $cuadro_materialConsultado['cantidad'] ?></td>
        <td><?= $cuadro_materialConsultado['subtotal_costo'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay cuadro_materiales consultados para mostrar</p>
<?php } ?>