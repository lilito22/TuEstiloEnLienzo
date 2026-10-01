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
<h1>Listado de pagos</h1>
<?php if (!empty($pagos)){ ?>

<table>
    <tr>
        <th>id_pago</th>
        <th>id_pedido</th>
        <th>fecha_pago</th>
        <th>monto</th>
        <th>metodo_pago</th>
        <th>tipo_movimiento</th>
        <th>referencia</th>
        <th>observacion</th>
    </tr>

    <?php foreach ($pagos as $pago): ?>
    <tr>
        <td><?= $pago['id_pago'] ?></td>
        <td><?= $pago['id_pedido'] ?></td>
        <td><?= $pago['fecha_pago'] ?></td>
        <td><?= $pago['monto'] ?></td>
        <td><?= $pago['metodo_pago'] ?></td>
        <td><?= $pago['tipo_movimiento'] ?></td>
        <td><?= $pago['referencia'] ?></td>
        <td><?= $pago['observacion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay pagos para mostrar</p>
<?php } ?>

<h1>pago consultado</h1>
<?php if (!empty($pagoConsultado)){ ?>

<table>
    <tr>
        <th>nombre</th>
        <th>apellido</th>
    </tr>
    <tr>
        <td><?= $pagoConsultado['monto'] ?></td>
        <td><?= $pagoConsultado['tipo_movimiento'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay pagos consultados para mostrar</p>
<?php } ?>