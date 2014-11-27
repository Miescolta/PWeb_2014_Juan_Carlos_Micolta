<?php include_once('includes/database.php') 

/* Este taller fue realizado por juan Carlos Micolta, Ademas se recibio ayuda de Carlos Andres Valencia y Kammil Carranza
Tambien se utilizaron estos tutoriales como apoyo :
http://stackoverflow.com/questions/16554748/adding-multiple-markers-to-google-map
http://www.tutorialspoint.com/html5/html5_drag_drop.htm
507980
*/

?>
<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body onload="initialize()">
<div class="row">


<center>  
<div id="Titulo" class = "col-md-12">
  <h1>Bienvenido</h1>
</div>

</center>
<section id="cajaImagenes" class="col-md-12">

    <!-- Se introducen las imagenes para que se muestren y ademas puedan ser arrastradas al drop -->
    
    <h3>Selecciona uno de los Iconos</h3>
    <img id="Tienda" src="img/Tienda.jpg" class="col-md-1">

    
 
    <img id="Bar" src="img/Bar.jpg" class="col-md-1">

    
  
    <img id="Hotel" src="img/Hotel.jpg" class="col-md-1">
  
    <div class="col-md-2" ></div>
    <div class="col-md-4">
  <div id="map_canvas" style="height:329px"></div>
</div>

  </section>
<div class="col-md-12" ></div>



<center>

  <section id="drop" class="col-md-12">
  <h4 id="texto">Ponlo Aquì</h4>
  <canvas id="lienzo" height="340"></canvas>
  </section>
</center>


 
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/main.js"></script>

  <script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCaab8OrK_KEDS9LQOaEpxRIKew75pzDMw&sensor=true">
</script>

</body>
</html>
