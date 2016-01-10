<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Deben de estar presentes estos "tags", despues de ellos el resto -->
    <meta name="description" content="Pagina dedicada a la liga estadounidense de baloncesto, la NBA">
    <meta name="author" content="Francisco Javier Galiana y Matthew Webb">
    <meta name="keywords" content="Ingeniería, web, NBA" />
    <meta name="copyright" content="2016 FraMatt" />
    <link rel="icon" href="nba.com/assets/img/favicon.ico">

    <title>NBA.ua.es</title>

    <!-- Necesario para cargar el estilo de Bootstrap en su visualizacion -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-1.12.0.min.js"></script>
  	<script src="assets/js/bootstrap.min.js"></script>

  </head>

  <body>

<!-- Cabecera de registro -->
<div id="legend">
      <legend class="">Registro en NBA.ua.es</legend>
</div>

<!-- Formulario de registro -->
	<div class="container">
	
	<form class="form" role="form" action="index.php/registro_user.php" method="GET" id="formulario1" name="formulario1">
	
	<?php echo form_open('registroUsuario'); ?>
		
	<div class="form-group">
	    <label for="email_1">Email: (*)</label>
	    <input type="email" class="form-control" id="Email" name="Email" required placeholder="Introduce tu email" value="<?php echo set_value('Email'); ?>">
  	</div>

  	<div class="form-group">
	    <label for="Contrasenya">Contraseña: (*)</label>
	    <input type="password" class="form-control" id="Contrasenya" name="Contrasenya" required placeholder="Contraseña" value="<?php echo set_value('Contrasenya'); ?>">
  	</div>

  	<div class="form-group">
  	    <input type="password" class="form-control" id="Contrasenya_2" name="Contrasenya_2" required placeholder="Repita la contraseña">
  	</div>
  	
  	<div class="alert alert-warning alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>¡Cuidado!</strong> La confirmación de contraseña debe coincidir.
	</div>

	<div class="form-group">
		<label class="control-label" for="Nombre">Nombre: (*)</label>
		<input class="form-control" type="text" id="Nombre" name="Nombre" size="25" maxlength="100" required placeholder="Escriba aquí su nombre" value="<?php echo set_value('Nombre'); ?>" />
	</div>

	<div class="form-group">
		<label class="control-label" for="Apellido">Apellidos: (*)</label>
		<input class="form-control" type="text" id="Apellido" name="Apellido" size="25" maxlength="100" required placeholder="Escriba aquí sus apellidos" value="<?php echo set_value('Apellido'); ?>" />
	</div>

	<div class="form-group">
		<label class="control-label" for="Pais">Pais de origen: (*)</label>
		<select class="form-control" name="Pais" id="Pais" nombre="Pais" value="<?php echo set_value('Pais'); ?>">
			<option value="-1">Seleccione un país</option>
			<option value="1">España</option>
			<option value="2">Inglaterra</option>
			<option value="3">Alemania</option>
		</select>
	</div>
	<!-- Error al seleccionar Seleccione un pais -->
	<div class="form-group" id="errorPais">
	</div>

	<div class="checkbox">
		<label>
			<input type="checkbox" name="Terminos_uso" required> He leído y acepto los 
				<a href="#" title="Términos de uso" data-toggle="popover" data-trigger="focus" data-content="
					Este Sitio Web (incluyendo todo su contenido) es propiedad de FranMatt S.A. o de sus licenciantes y está protegido por leyes de derecho de autor, de
					marcas y otras de FranMatt. Excepto cuando fuera expresamente
					dispuesto de otro modo, autorizamos a Ud. a consultar este Sitio Web y a
					imprimir y descargar copias del material del Sitio Web solamente para su uso
					personal, no comercial, ello en la medida en que Ud. no elimine o remueva
					cualquier notificación o información de derechos de autor o propiedad intelectual
					que aparecieran en el material que Ud. imprimiera o descargara. Ud. acuerda que
					salvo lo expuesto precedentemente, no reproducirá, distribuirá, mostrará o
					transmitirá cualquier material en el Sitio Web, de cualquier manera y/o por
					cualquier medio. Ud. también acuerda no modificar, vender, transmitir o
					distribuir cualquier material en el Sitio Web, de cualquier manera o en cualquier
					medio, incluyendo la carga del material o de otro modo poner el material
					disponible en línea. ">términos de uso</a>.
		</label>
    </div>

	<div class="form-group">
		<input class="btn btn-success" type="submit" value="Enviar datos" />
	</div>

	<?php echo form_close(); ?>

	</form>
	
	</div>

	<!-- Scripts de la vista -->

	<!-- Script del desplegable de terminos de uso -->
	<script>$(document).ready(function(){$('[data-toggle="popover"]').popover();});</script>
  
  </body>
</html>