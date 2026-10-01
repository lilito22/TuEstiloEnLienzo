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
<h1>Listado de tipo_egresos</h1>
<?php if (!empty($tipo_egresos)){ ?>

<table>
    <tr>
        <th>id_tipo_egreso</th>
        <th>nombre</th>
        <th>descripcion</th>
    </tr>

    <?php foreach ($tipo_egresos as $tipo_egreso): ?>
    <tr>
        <td><?= $tipo_egreso['id_tipo_egreso'] ?></td>
        <td><?= $tipo_egreso['nombre'] ?></td>
        <td><?= $tipo_egreso['descripcion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay tipo_egresos para mostrar</p>
<?php } ?>

<h1>tipo_egreso consultado</h1>
<?php if (!empty($tipo_egresoConsultado)){ ?>

<table>
    <tr>
        <th>nombre</th>
        <th>descripcion</th>
    </tr>
    <tr>
        <td><?= $tipo_egresoConsultado['nombre'] ?></td>
        <td><?= $tipo_egresoConsultado['descripcion'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay tipo_egresos consultados para mostrar</p>
<?php } ?>