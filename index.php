 <?php
      include("db_connect.php");
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="script.js" defer></script>
</head>
<body>

<div class="login">


    <h1>Bienvenido</h1>

    <p>Iniciá sesión con tu cuenta de Google</p>

    <div
        id="g_id_onload"
        data-client_id="808228686230-ljicr4st7l199ktrqvv9av9ftod5a9hc.apps.googleusercontent.com"
        data-callback="handleCredentialResponse"
        data-auto_prompt="false">
    </div>

    <div
        class="g_id_signin"
        data-type="standard"
        data-theme="filled_blue"
        data-size="large"
        data-shape="pill"
        data-text="continue_with"
        data-logo_alignment="left">
    </div>

</div>

</body>
</html>