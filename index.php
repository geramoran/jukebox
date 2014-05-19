<?php
	include 'conexion.php';
	if($conexion){
		echo "<script> location.href='login.php' </script>";
	}
	else{
		echo "<script> location.href='instalar.php' </script>";
	}
	$conexion->close();
?>