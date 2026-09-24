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
<h1>Listado de pedidos</h1>
<?php if (!empty($pedidos)){ ?>

<table>
    <tr>
        <th>id_pedido</th>
        <th>id_cliente</th>
        <th>id_usuario</th>
        <th>fecha_pedido</th>
        <th>estado_pedido</th>
        <th>subtotal</th>
        <th>total</th>
        <th>tipo_entrega</th>
        <th>direccion_entrega</th>
        <th>ciudad_entrega</th>
        <th>fecha_entrega</th>
        <th>observacion</th>
    </tr>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?= $pedido['id_pedido'] ?></td>
        <td><?= $pedido['id_cliente'] ?></td>
        <td><?= $pedido['id_usuario'] ?></td>
        <td><?= $pedido['fecha_pedido'] ?></td>
        <td><?= $pedido['estado_pedido'] ?></td>
        <td><?= $pedido['subtotal'] ?></td>
        <td><?= $pedido['total'] ?></td>
        <td><?= $pedido['tipo_entrega'] ?></td>
        <td><?= $pedido['direccion_entrega'] ?></td>
        <td><?= $pedido['ciudad_entrega'] ?></td>
        <td><?= $pedido['fecha_entrega'] ?></td>
        <td><?= $pedido['observacion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay pedidos para mostrar</p>
<?php } ?>

<h1>pedido consultado</h1>
<?php if (!empty($pedidoConsultado)){ ?>

<table>
    <tr>
        <th>fecha_entrega</th>
        <th>total</th>
    </tr>
    <tr>
        <td><?= $pedidoConsultado['fecha_pedido'] ?></td>
        <td><?= $pedidoConsultado['total'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay pedidos consultados para mostrar</p>
<?php } ?>