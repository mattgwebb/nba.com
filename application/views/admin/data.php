<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/NBA/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/NBA/assets/css/dashboard.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/NBA/assets/js/bootstrap.min.js"></script>

    <?php if($accion != "ver") {?></h2>
      <script type="text/javascript">
        $(window).load(function(){
            $('#myModal').modal('show');
        });
      </script>
    <?php }?> 
  </head>

  <body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NBA</a>
            <ul class="nav navbar-nav">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Players</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Games</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="http://localhost/NBA/index.php/admin/data/comentario/ver">Comentarios</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/division/ver">Divisiones</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/equipo/ver">Equipos</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/galeria/ver">Galerias</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/imagen/ver">Imagenes</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/jugador/ver">Jugadores</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/noticia/ver">Noticias</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/pais/ver">Paises</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/partido/ver">Partidos</a></li>
            <li><a href="http://localhost/NBA/index.php/admin/data/usuario/ver">Usuarios</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <h2><?php echo ucwords($nombre);?></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <?php foreach($campos as $campo){?>
                    <th><?php echo $campo;?></th>
                  <?php }?> 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <form class="form" action= "/NBA/index.php/admin/anyadir/<?php echo $nombre?>" method="post" role="form" id="formulario1" name="formulario1">
                    <?php foreach($campos as $campo){?>
                      <td><input type="text" name="<?php echo $campo?>" class="form-control"</td>
                    <?php }?>
                    <td><button type="submit" class="btn btn-success" action="">Añadir</button></td>
                  </form>
                </tr>
                <?php if($tabla != "No encontrado") {?>
                <?php foreach($tabla as $fila){?>
                  <?php $i = 0?>
                  <tr>
                    <form class="form" action= "/NBA/index.php/admin/actualizar/<?php echo $nombre?>" method="post" role="form">
                      <?php foreach($fila as $dato){?>
                        <?php if($campos[$i] == "id" || $campos[$i] == "email") {?>
                          <td><input type="text" name="<?php echo $campos[$i];?>" value="<?php echo $dato;?>" class="form-control" readonly></td>
                        <?php } else {?>
                          <td><input type="text" name="<?php echo $campos[$i];?>" value="<?php echo $dato;?>" class="form-control"></td>
                        <?php }?>  
                        <?php $i++;?>
                      <?php }?>
                      <td>
                          <button name="accion" type="submit" value="modificar" class="btn btn-success" action="">Modificar</button>
                          <button name="accion" type="submit" value="borrar" class="btn btn-danger" action="">Borrar</button>
                      </td>
                    </form>
                  </tr>
                <?php }?>
                <?php }?> 
              </tbody>
            </table>
             <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Administrador</h4>
                  </div>
                  <div class="modal-body">
                    <p><?php echo $accion;?> realizado con éxito.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="/NBA/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/NBA/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/NBA/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>