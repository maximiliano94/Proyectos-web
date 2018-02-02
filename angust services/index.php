<!DOCTYPE html>
<html lang="Es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>angus servicios</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/estilos.css">
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body  data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="jumbotrom">
		<img src="img/Angus-4.jpg">
	</div>
     
   <br>
   	<?php 
        include 'Menu.php';
     ?>
    
    <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/imagen1.jpg" alt="imagen1">
       <div class="carousel-caption">
        <h3>Sean Bienvenidos a Angus Servicios</h3>
        <p> su Talller ecanico e servicios de Fletes </p>
    </div>
      </div>

      <div class="item">
        <img src="img/FLETE.jpg" alt="FLETE">
        <div class="carousel-caption">
        	<h3>Necesita LLevar sus cosas??</h3>
        	<p>realizamos fletes dentro y fuera den santiago</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/AUTO.jpg" alt="AUTO" >
        <div class="carousel-caption">
        <h3>tiene problemas con su Automovil ? </h3>
        <p>esta es su solucion</p>
    </div>
      </div>

      <div class="item">
        <img src="img/Mecánico1.jpg" alt="Mecánico1">
        <div class="carousel-caption">
        <h3>Contamos un buen servicio</h3>
        <p> con experiencia </p>
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>