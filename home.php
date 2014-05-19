<?php
	session_start();
	$hi = "Bienvenido: ".$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8" />
	<meta name="description" content="inicio de la aplicación">
	<title>Jukebox - Home</title>
	<link rel="stylesheet" href="css/style_home.css" />
	<link rel="stylesheet" href="css/style_general.css" />
</head>
<body>
	<header>
		<h1 id="izq" onclick="location.href='home.php'">Jukebox</h1>
		<p id="der"><?php echo $hi; ?></p>
	</header>
	<section id="contenedor">
		<div id="a" onclick="location.href='galeria.php'"><p>Galeria</p></div>
		<div id="b" onClick="location.href='admin.php'"><p>Administradores</p></div>
		<div id="c" onClick="location.href='config.php'"><p>Configuraciones</p></div>
		<div id="d" onClick="location.href='close.php'"><p>Cerrar Sesion</p></div>
	</section>
</body>
</html>