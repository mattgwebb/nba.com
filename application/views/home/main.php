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
    <link rel="icon" href="/nba.com/assets/img/favicon.ico">

    <title>NBA.ua.es</title>

    <!-- Necesario para cargar el estilo de Bootstrap en su visualizacion -->
    <link href="nba.com/assets/css/bootstrap.min.css" rel="stylesheet">


    <script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
    <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>
    <script>
      $(document).ready(function(){
        $("#search").keyup(function(){
          if($("#search").val().length>3){
            $.ajax({
              type: "post",
              url: "http://localhost/NBA/index.php/home/autoCompletar",
              cache: false,       
              data:'search='+$("#search").val(),
              success: function(response){
                $('#a').html("");
                var obj = JSON.parse(response);
                if(obj.length>0){
                  try{
                    var items=[];   
                    $.each(obj, function(i,val){                      
                      items.push($('<option/>').text(val.nombre));
                    }); 
                    $('#a').append.apply($('#a'), items);
                  } catch(e) {   
                    alert('Exception while request..');
                  }   
                }
            },
            error: function(){            
              alert('Error while request..');
            }
        });
      }
    return false;
    });
  });
  </script>
   <script src="/NBA/assets/js/jquery-1.12.0.min.js"></script> 
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

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
         <form class="navbar-form navbar-left" role="search" method="POST" action="/NBA/index.php/home/search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="search" name="search" list="a">
           <datalist id="a">
          </datalist>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        <?php
          if($this->session->userdata('logged_in')) {
              $data['email'] = $this->session->userdata('logged_in');
        ?>
        <ul class="nav navbar-nav navbar-right">
          <div class="navbar-header">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hey, <?php echo $data['email']; ?></a>
          </li>
            <button type="button" class="btn btn-danger" onclick="location.href='/NBA/index.php/home/logout'">Sign out</button>
          </div>
        </ul>
        <?php }else{ ?>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="/NBA/index.php/home/login">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success" action="">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
        <?php } ?>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">

          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 FraMatt, Inc.</p>
      </footer>
    </div>

  <!-- Necesario para cualquier pagina con Bootstrap, se coloca al final para evitar que cargue lenta la pagina -->
	<script src="/NBA/assets/js/bootstrap.min.js"></script> 


  </body>
</html>