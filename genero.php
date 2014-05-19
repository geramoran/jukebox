<?php
	include ('conexion.php');
	$status;
	ini_set('post_max_size','100M');
	ini_set('upload_max_filesize','100M');
	ini_set('max_execution_time','1000');
	ini_set('max_input_time','1000');

	function genero(){
		$gen = $_POST["nombre"];
		$des = $_POST["descripcion"];
		$subcarp = $_FILES["files[]"]['tmp_name'];
		$prefijo = substr(md5(uniqid(rand())),0,6);
		$ruta = "img/genero/".$prefijo."_".$_FILES["files"]['name'];
		move_uploaded_file($subcarp, $ruta);
		if (mysqli_execute("INSERT INTO genero(nombre_genero, descripcion, archivo) VALUES ('$gen', '$des', '$ruta')", $conexion)){
			$status = "Genero registrado";
		}
		else {
			$status = "Error, no se pudo guardar el archivo: falla sql";
		}
	}
?>