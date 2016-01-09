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
    <link rel="icon" href="assets/img/favicon.ico">

    <title>NBA.ua.es</title>

    <!-- Necesario para cargar el estilo de Bootstrap en su visualizacion -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  </head>

  <body>

<!-- Cabecera de registro -->
<div id="legend">
      <legend class="">Registro en NBA.ua.es</legend>
</div>

<!-- Formulario de registro -->
	<div class="container">
	
	<form class="form" role="form" action="algo.php" method="GET" id="formulario1" name="formulario1">

	<div class="form-group">
	    <label for="ejemplo_email_1">Email: (*)</label>
	    <input type="email" class="form-control" id="Email" required placeholder="Introduce tu email">
  	</div>

  	<div class="form-group">
	    <label for="ejemplo_password_1">Contraseña: (*)</label>
	    <input type="password" class="form-control" id="contrasenya" required placeholder="Contraseña">
  	</div>

  	<div class="form-group">
  	    <input type="password" class="form-control" id="contrasenya_2" required placeholder="Repita la contraseña">
  	</div>

	<div class="form-group">
		<label class="control-label" for="Nombre">Nombre: (*)</label>
		<input class="form-control" type="text" id="nombre" name="nombre" size="25" maxlength="100" required placeholder="Escriba aquí su nombre" />
	</div>

	<div class="form-group">
		<label class="control-label" for="Apellido">Apellidos: (*)</label>
		<input class="form-control" type="text" id="apellidos" name="apellidos" size="25" maxlength="100" required placeholder="Escriba aquí sus apellidos" />
	</div>

	<div class="form-group">
		<label class="control-label" for="Pais">Pais de origen: (*)</label>
		<select class="form-control" name="pais" id="pais">
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
			<input type="checkbox" name="terminos_uso" required> He leído y acepto los términos de uso
    	</label>
    </div>

	<div class="form-group">
		<input class="btn btn-success" type="submit" value="Enviar datos" />
	</div>

	</form>
	
	</div>


  <!-- Necesario para cualquier pagina con Bootstrap, se coloca al final para evitar que cargue lenta la pagina -->
  <script src="assets/js/jquery-1.12.0.min.js";</script> 
  <script src="assets/js/bootstrap.min.js"></script> 

  </body>
</html>