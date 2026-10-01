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
<h1>Listado de egresos</h1>
<?php if (!empty($egresos)){ ?>

<table>
    <tr>
        <th>id_egreso</th>
        <th>fecha_egreso</th>
        <th>concepto</th>
        <th>id_tipo_egreso</th>
        <th>valor</th>
        <th>observacion</th>
    </tr>

    <?php foreach ($egresos as $egreso): ?>
    <tr>
        <td><?= $egreso['id_egreso'] ?></td>
        <td><?= $egreso['fecha_egreso'] ?></td>
        <td><?= $egreso['concepto'] ?></td>
        <td><?= $egreso['id_tipo_egreso'] ?></td>
        <td><?= $egreso['valor'] ?></td>
        <td><?= $egreso['observacion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay egresos para mostrar</p>
<?php } ?>

<h1>egreso consultado</h1>
<?php if (!empty($egresoConsultado)){ ?>

<table>
    <tr>
        <th>concepto</th>
        <th>valor</th>
    </tr>
    <tr>
        <td><?= $egresoConsultado['concepto'] ?></td>
        <td><?= $egresoConsultado['valor'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay egresos consultados para mostrar</p>
<?php } ?>