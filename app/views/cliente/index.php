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
<h1>Listado de clientes</h1>
<?php if (!empty($clientes)){ ?>

<table>
    <tr>
        <th>id_cliente</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>telefono</th>
        <th>correo</th>
        <th>direccion</th>
        <th>ciudad</th>
        <th>estado</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?= $cliente['id_cliente'] ?></td>
        <td><?= $cliente['nombre'] ?></td>
        <td><?= $cliente['apellido'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
        <td><?= $cliente['correo'] ?></td>
        <td><?= $cliente['direccion'] ?></td>
        <td><?= $cliente['ciudad'] ?></td>
        <td><?= $cliente['estado'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php } else{ ?>
<p> no hay clientes para mostrar</p>
<?php } ?>

<h1>cliente consultado</h1>
<?php if (!empty($clienteConsultado)){ ?>

<table>
    <tr>
        <th>nombre</th>
        <th>apellido</th>
    </tr>
    <tr>
        <td><?= $clienteConsultado['nombre'] ?></td>
        <td><?= $clienteConsultado['apellido'] ?></td>
    </tr>
</table>

<?php } else { ?>
<p> no hay clientes consultados para mostrar</p>
<?php } ?>