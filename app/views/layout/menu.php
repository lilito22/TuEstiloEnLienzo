<style>
    .menu-principal {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        align-items: center;
        padding: 10px;
        margin-bottom: 15px;
        background-color: #f3eafc;
        border-bottom: 2px solid #b691db;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }
    .menu-usuario { margin-left: auto; }
    #btn-logout {
        background-color: #b691db;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>

<?php $basePath = APP_BASE_PATH; ?>

<script>
    window.APP_BASE_PATH = <?= json_encode($basePath, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
</script>

<!-- "hidden" hasta que guard.js confirme la sesión en el navegador -->
<nav class="menu-principal" id="menu-principal" hidden>
    <a href="<?= $basePath ?>/cliente">Clientes</a>
    <a href="<?= $basePath ?>/cliente/crear">crear_Cliente</a>

    <a href="<?= $basePath ?>/cuadro">Cuadros</a>
    <a href="<?= $basePath ?>/cuadro/crear">Crear_Cuadro</a>

    <a href="<?= $basePath ?>/cuadro_material">Cuadro_materiales</a>
    <a href="<?= $basePath ?>/cuadro_material/crear">Crear_Cuadro_material</a>

    <a href="<?= $basePath ?>/detalle_pedido">detalle_pedido</a>
    <a href="<?= $basePath ?>/detalle_pedido/crear">Crear_detalle_pedido</a>

    <a href="<?= $basePath ?>/egresos">egresos</a>
    <a href="<?= $basePath ?>/egresos/crear">Crear_egresos</a>

    <a href="<?= $basePath ?>/facturas">facturas</a>
    <a href="<?= $basePath ?>/facturas/crear">Crear_facturas</a>

    <a href="<?= $basePath ?>/materiales">materiales</a>
    <a href="<?= $basePath ?>/materiales/crear">Crear_materiales</a>

    <a href="<?= $basePath ?>/pagos">pagos</a>
    <a href="<?= $basePath ?>/pagos/crear">Crear_pagos</a>

    <a href="<?= $basePath ?>/pedidos">Pedidos</a>
    <a href="<?= $basePath ?>/pedidos/crear">Crear_pedidos</a>

    <a href="<?= $basePath ?>/tipo_egresos">tipo_egresos</a>
    <a href="<?= $basePath ?>/tipo_egresos/crear">Crear_tipo_egresos</a>

    <span class="menu-usuario">
        Usuario: <strong data-user-email><?= htmlspecialchars($_SESSION['usuario']['email'] ?? '') ?></strong>
        <button type="button" id="btn-logout">Cerrar sesión</button>
    </span>
</nav>

<script src="<?= htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8') ?>/assets/js/auth/config.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script src="<?= htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8') ?>/assets/js/auth/supabase-client.js"></script>
<script src="<?= htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8') ?>/assets/js/auth/auth.js"></script>
<script src="<?= htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8') ?>/assets/js/auth/guard.js"></script>
