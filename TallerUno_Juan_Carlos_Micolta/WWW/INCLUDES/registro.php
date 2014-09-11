<html>
<head>
	<title>Notas de Estudiantes</title>
	<meta charset="utf-8">
</head>


<body>
	<br/>
	<section>
	<form action="agregarUsuario.php" method="POST">
	<label>Nombre</label><input type="text" name="Nombre" id="nombre">
	<br/>
	<label>Apellido</label><input type="text" name="Apellido" id="apellido">
	<br/>
	<label>Correo</label><input type="text" name="Correo" id="correo">
	<br/>
	<label>Contraseña</label><input type="text" name="Contrasena" id="password">
	<br/>
	<input type="submit" value="Registrar">
	</form>
	</section>

	<?php
	/*Aqui se envia la informacion escrita a el php de agregar usuario para que este se encargue de realizar la accion deseada
	*/
	?>

</body>
</html>