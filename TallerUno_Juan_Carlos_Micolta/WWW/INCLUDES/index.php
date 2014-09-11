<!DOCTYPE html>
<html>
<head>
	<title>Task Go</title>
	<meta charset="utf-8">
</head>
<body>

	<h1>Bienvenido A Task Go</h1>

	<section>
	<form action="verificar.php" method="POST">
	<label>Correo</label><input type="text" name="Correo" >
	<br/><br/>
	<label>Contraseña</label><input type="password" name="Contrasena" >
	<br/><br/>
	<input type="submit"  value="Login">
	</form>
	</section>
	<button type='button'><a href='registro.php'>Registro</a></button> 
	
<?php 
	include_once("database.php");
/*
En este codigo que se precenta como taller Uno, se recibio ayuda de maria alejandra moreno, se utilizo el taller realizado en clase para poder realizar algunas de las funiones requeridas.
Para esta primera parte del Login se utilizo un video que explicaba muy buien una de las posibles realizaciones de un login el link se precenta acontinuacion : https://www.youtube.com/watch?v=MEvL5TyLSXc&index=26&list=PLF02659CF8418C229
*/
?>


</body>
</html>

