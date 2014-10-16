<?php 
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
			<h2>Subtitulo Tienda</h2>

		</header>
		<div id="carro" style="background:rgb(200,200,200); color:black;"></div>
		<a href="INCLUDES/vacear.php"><button>Eliminar Productos</button></a>
		<a href="confirmar.php"><button>Confirmar Compra</button></a><br>
			 Usuario Registrado<br>
			 <form action="INCLUDES/logcliente.php" method="POST">
			 	<input type="text" name="usuario" placeholder="Introdusca su Usuario">
				<input type="text" name="contrasena" placeholder="Introdusca su contraseña">
				<input type="submit">
			|</form>

			 Nuevo usuario? <br>


	
		<footer></footer>
	</div>

</body>
</html>