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
<h1>Listado de facturas</h1>
<?php if (!empty($facturas)){ ?>

<table>
    <tr>
        <th>id_factura</th>
        <th>id_pedido</th>
        <th>numero_factura</th>
        <th>fecha_factura</th>
        <th>subtotal</th>
        <th>impuesto</th>
        <th>total_factura</th>
        <th>estado_factura</th>
    </tr>

    <?php foreach ($facturas as $factura): ?>
    <tr>
        <td><?= $factura['id_factura'] ?></td>
        <td><?= $factura['id_pedido'] ?></td>
        <td><?= $factura['numero_factura'] ?></td>
        <td><?= $factura['fecha_factura'] ?></td>
        <td><?= $factura['subtotal'] ?></td>
        <td><?= $factura['impuesto'] ?></td>
        <td><?= $factura['total_factura'] ?></td>
        <td><?= $factura['estado_factura'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay facturas para mostrar</p>
<?php } ?>

<h1>factura consultado</h1>
<?php if (!empty($facturaConsultado)){ ?>

<table>
    <tr>
        <th>numero_factura</th>
        <th>impuesto</th>
    </tr>
    <tr>
        <td><?= $facturaConsultado['numero_factura'] ?></td>
        <td><?= $facturaConsultado['impuesto'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay facturas consultados para mostrar</p>
<?php } ?>