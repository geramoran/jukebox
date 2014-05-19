<?php
	include 'conexion.php';
	ini_set('post_max_size','100M');
	ini_set('upload_max_filesize','100M');
	ini_set('max_execution_time','1000');
	ini_set('max_input_time','1000');

	if($_POST["genero"] == "Enviar"){
		$gen = $_POST["nombre"];
		$des = $_POST["descripcion"];
		$subcarp = $_FILES["fila"]['tmp_name'];
		$prefijo = substr(md5(uniqid(rand())),0,6);
		$ruta = "img/genero/".$prefijo."_".$_FILES["fila"]['name'];
		move_uploaded_file($subcarp, $ruta);
		if ($conexion->query("INSERT INTO genero(nombre_genero, descripcion, archivo) VALUES ('$gen', '$des', '$ruta')"))
		{
			?>
				<script>
					var a = alert('Genero guardado');
					if (a == this.onClick) {
						location.href='galeria.php'
					};
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					var a = alert('Fallo al guardar');
					if (a == this.onClick) {
						location.href='galeria.php'
					};
				</script>
			<?php
		}
		$conexion->close();
	}
?>