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
    <link href="/NBA/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  </head>

  <body>

<!-- Cabecera de registro -->
<div id="legend">
      <legend class="">Registro en NBA.ua.es</legend>
</div>

<!-- Formulario de registro -->
	<div class="container">	
	<?php echo validation_errors(); ?>
	<form class="form" action= "/NBA/index.php/registro/" method="post" role="form">
	
	<div class="form-group">
	    <label for="email">Email: (*)</label>
	    <input type="email" class="form-control" name="email" placeholder="Introduce tu email" value="<?php echo set_value('email'); ?>">
  	</div>

  	<div class="form-group">
	    <label for="contrasenya">Contraseña: (*)</label>
	    <input type="password" class="form-control" name="contrasenya" placeholder="Contraseña" value="">
  	</div>

  	<div class="form-group">
  	    <input type="password" class="form-control" name="contrasenya_2" placeholder="Repita la contraseña">
  	</div>

	<div class="form-group">
		<label class="control-label" for="nombre">Nombre: (*)</label>
		<input class="form-control" type="text" name="nombre" size="25" maxlength="100" placeholder="Escriba aquí su nombre" value="<?php echo set_value('nombre'); ?>" />
	</div>

	<div class="form-group">
		<label class="control-label" for="apellido">Apellidos: (*)</label>
		<input class="form-control" type="text" name="apellido" size="25" maxlength="100" placeholder="Escriba aquí sus apellidos" value="<?php echo set_value('apellido'); ?>" />
	</div>

	<div class="form-group">
		<label class="control-label" for="pais">Pais de origen: (*)</label>
		<select class="form-control" name="pais" value="">
			<option value="-1">Seleccione un país</option>
			<?php foreach($paises as $pais){?>
				<option value="<?php echo $pais->id; ?>"><?php echo $pais->nombre; ?></option>
			<?php }?> 
		</select>
	</div>
	<!-- Error al seleccionar Seleccione un pais -->
	<div class="form-group" id="errorPais">
	</div>

	<div class="checkbox">
		<label>
			<input type="checkbox" name="Terminos_uso" required> He leído y acepto los términos de uso
    	</label>
    </div>

	<div class="form-group">
		<input class="btn btn-success" type="submit" value="Enviar datos" />
	</div>
	</form>	
	</div>


  <!-- Necesario para cualquier pagina con Bootstrap, se coloca al final para evitar que cargue lenta la pagina -->
  <script src="/NBA/assets/js/jquery-1.12.0.min.js";</script> 
  <script src="/NBA/assets/js/bootstrap.min.js"></script> 

  </body>
</html>