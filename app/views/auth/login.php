<?php $base = htmlspecialchars(APP_BASE_PATH, ENT_QUOTES, 'UTF-8'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar sesión · TuEstiloEnLienzo</title>
  <link rel="stylesheet" href="<?= $base ?>/assets/css/styles.css" />
  <style>
    /* Colores de TuEstiloEnLienzo sobre los estilos del instructor */
    body { background: #f3eafc; }
    .box { border-color: #c2a2e1; border-radius: 8px; margin-top: 60px; }
    h1 { color: #6b3fa0; }
    form button[type="submit"] {
      width: 100%; background: #b691db; border: none; border-radius: 4px; font-weight: bold;
    }
    form button[type="submit"]:disabled { opacity: .6; cursor: wait; }
  </style>
</head>
<body>
  <main class="box">
    <h1>TuEstiloEnLienzo</h1>
    <p class="note">Ingresa con tu correo y contraseña.</p>

    <div id="config-banner" class="banner" hidden>
      Falta configurar <strong>public/assets/js/auth/config.js</strong>.
    </div>

    <p id="auth-message" class="message" role="alert" hidden></p>

    <section id="panel-login">
      <form id="form-login" novalidate>
        <label>Correo<br />
          <input id="login-email" type="email" placeholder="correo@ejemplo.com" autocomplete="email" />
        </label>
        <label>Contraseña<br />
          <input id="login-password" type="password" placeholder="Contraseña" autocomplete="current-password" />
        </label>
        <button type="submit">Entrar</button>
      </form>
    </section>
  </main>

  <script>window.APP_BASE_PATH = <?= json_encode(APP_BASE_PATH) ?>;</script>
  <script src="<?= $base ?>/assets/js/auth/config.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
  <script src="<?= $base ?>/assets/js/auth/supabase-client.js"></script>
  <script src="<?= $base ?>/assets/js/auth/auth.js"></script>
</body>
</html>
