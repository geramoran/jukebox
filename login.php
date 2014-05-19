<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="uft-8" />
    <meta name="description" content="logueo">
    <title>Jukebox - Iniciar Sesión</title>
    <?php
        include 'conexion.php';
        session_unset();
    ?>
    <link rel="stylesheet" type="text/css" href="css/style_general.css">
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
    <header>
        <h1 id="izq">Jukebox</h1>
    </header>
    <form class="contenido" name="login" method="post" action="session.php">
        <h1>Login</h1>
        Usuario: <input type="text" name="txtuser" id="txtuser" />
        Contraseña: <input type="password" name="txtpass" id="txtpass" />
        <input type="submit" id="iniciar" name="submit" value="Iniciar Sesion" />
    </form>
</body>
</html>