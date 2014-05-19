<?php
	session_start();
	$hi = "Bienvenido: ".$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="galeria de contenido" />
	<title>Jukebox - Administracion de la Galeria</title>
	<link rel="stylesheet" href="css/style_general.css" />
	<link rel="stylesheet" href="css/style_galeria.css" />
	<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript">
        window.imagenVacia = "img/insert.jpg";
        window.mostrarVistaPrevia = function mostrarVistaPrevia(){
            var Archivos,Lector;
            Archivos = jQuery('.fila')[0].files;
            if(Archivos.length>0){  
                Lector = new FileReader();
                Lector.onloadend = function(e){
                    var origen, tipo;
                    origen = e.target; 
                    jQuery('#vistaPrevia').attr('src', origen.result);
                };
                Lector.onerror = function(e){
                    console.log(e)
                }
                Lector.readAsDataURL(Archivos[0]);
            }else{
                var objeto = jQuery('.fila');
                objeto.replaceWith(objeto.val('').clone());
                jQuery('#vistaPrevia').attr('src', window.imagenVacia);
            };
        };
        jQuery(document).ready(function(){
            jQuery('#vistaPrevia').attr('src', window.imagenVacia);
            jQuery('#der1').on('change', '.fila', function(e){
                window.mostrarVistaPrevia();
            });
            /*no estara en uso, hasta que pueda hacer la funcion de borrado, cosa que es facil,
            pero, cambiaria el atributo #cancelar por el nombre del boton del borrado*/ 
            jQuery('#cancelar').on('click', function(e){
                var objeto = jQuery('.fila');
                objeto.replaceWith(objeto.val('').clone());
                jQuery('#vistaPrevia').attr('src', window.imagenVacia);
            });
        });
    </script>
<body>
	<header>
		<h1 id="izq" onclick="location.href='home.php'">Jukebox</h1>
		<p id="der"><?php echo $hi; ?></p>
	</header>
	<div id="tab-box">
		<div id="tab-1" class="tab">
			<span>
				<a href="#tab-1">Generos</a>
			</span>
			<span>
				<form id="gen" action="control_galeria.php" method="post" accept-charset"utf-8" enctype="multipart/form-data">
					<div id="lad1">
							<div id="izq1">
							<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" required=""> <br />
							<textarea id="descripcion" name="descripcion" placeholder="Aqui describa el genero"></textarea>
						</div>
						<div id="der1">
							<input type="file" class="fila" name="fila" accept="image/*" required="" /><br />
							<img id="vistaPrevia" src="" alt="" />
						</div>
					</div>
					<div id="ab">
						<input type="submit" name="genero" value="Enviar">
					</div>
				</form>
			</span>
		</div>
		<div id="tab-2" class="tab">
			<span>
				<a href="#tab-2">Artistas</a>
			</span>
			<span>
				<p>Lorem ipsum Velit proident magna dolor.</p>
			</span>
		</div>
		<div id="tab-3" class="tab">
			<span>
				<a href="#tab-3">Albumes</a>
			</span>
			<span>
				<p>Lorem ipsum Velit proident magna dolor.</p>
			</span>
		</div>
		<div id="tab-4" class="tab">
			<span>
				<a href="#tab-4">Audio</a>
			</span>
			<span>
				<p>Lorem ipsum Aliquip fugiat non reprehenderit proident nisi et id eiusmod deserunt in reprehenderit deserunt aute nostrud dolor ullamco.</p>
			</span>
		</div>
		<div id="tab-5" class="tab">
			<span>
				<a href="#tab-5">Video</a>
			</span>
			<span>
				<p>Lorem ipsum Velit proident magna dolor.</p>
			</span>
		</div>
	</div>
	<script type="text/javascript">
		window.location.hash = '#tab-1'
	</script>
</body>
</html>