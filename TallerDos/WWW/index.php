<?php 
//En esta parde del inicio fui ayudado por, Andrea Castañeda, Kammil Carranza y Sebastian Vasques. Ademas se la ayuda que obtube de ellos utilice algo de los sigueintes videos para poder tener 
// mayor idea de como realizarlo: https://www.youtube.com/watch?v=jxWGpvZEIpo,https://www.youtube.com/watch?v=pQT2cMNhlq0.
// Se utilizo tambien js ya que facilitaba un poco el manejo de sessiones.
session_start();
if (!isset($_SESSION['contador'])){$_SESSION['contador'] = 0;}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tienda</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/estilos_Generales.css">
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/codigo.js"></script>
</head>
<body>
    <div id="contenedor">
        <header>
            <h1>Tienda</h1>

        </header>
        <div id="carro" style="background:rgb(200,200,200); color:black;"></div>
        <a href="INCLUDES/vacear.php"><button>Eliminar Productos</button></a>
        <a href="confirmar.php"><button>Confirmar Compra</button></a>
        <section>
            <?php 
            include_once('INCLUDES/database.php');
            $query = "SELECT * FROM productos";
            $result = mysqli_query($cxn,$query);
            while ($fila = mysqli_fetch_array($result)) {
                echo "<article>";
                echo "<h3>".$fila ['nombre']."</h3>";
                echo "<p>".$fila ['descripcion']."</p>";
                echo "<h4>Precio: ".$fila ['precio']."pesos</h4>";
                echo "<h4>".$fila ['existencias']."</h4>";
                echo "<img src='IMG/" .$fila['imagen']."' height='100' width='100'><br>";
                echo "<button value = '".$fila ['id']."' class ='botonCompra'> Comprar ahora </button>";
                echo "</article>";
            }
             ?>


        </section>
        <footer></footer>
    </div>

</body>
</html>