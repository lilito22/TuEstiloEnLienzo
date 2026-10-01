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
<h1>Listado de detalle_pedidos</h1>
<?php if (!empty($detalle_pedidos)){ ?>

<table>
    <tr>
        <th>id_detalle_pedido</th>
        <th>id_pedido</th>
        <th>id_cuadro</th>
        <th>descripcion</th>
        <th>alto</th>
        <th>ancho</th>
        <th>cantidad</th>
        <th>precio_unitario</th>
        <th>subtotal</th>
    </tr>

    <?php foreach ($detalle_pedidos as $detalle_pedido): ?>
    <tr>
        <td><?= $detalle_pedido['id_detalle_pedido'] ?></td>
        <td><?= $detalle_pedido['id_pedido'] ?></td>
        <td><?= $detalle_pedido['id_cuadro'] ?></td>
        <td><?= $detalle_pedido['descripcion'] ?></td>
        <td><?= $detalle_pedido['alto'] ?></td>
        <td><?= $detalle_pedido['ancho'] ?></td>
        <td><?= $detalle_pedido['cantidad'] ?></td>
        <td><?= $detalle_pedido['precio_unitario'] ?></td>
        <td><?= $detalle_pedido['subtotal'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay detalle_pedidos para mostrar</p>
<?php } ?>

<h1>detalle_pedido consultado</h1>
<?php if (!empty($detalle_pedidoConsultado)){ ?>

<table>
    <tr>
        <th>descripcion</th>
        <th>cantidad</th>
    </tr>
    <tr>
        <td><?= $detalle_pedidoConsultado['descripcion'] ?></td>
        <td><?= $detalle_pedidoConsultado['cantidad'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay detalle_pedidos consultados para mostrar</p>
<?php } ?>