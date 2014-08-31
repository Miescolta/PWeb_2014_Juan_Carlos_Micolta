<html>
<head>
	<title>Notas de Estudiantes</title>
	<meta charset="utf-8">
</head>

<body>

<?php

include_once("includes/database.php");

$query="SELECT * FROM estudiantes_web.estudiantes";
$resultado=mysqli_query($cxn,$query);



	echo"<table border='1' style='width:300px'>";
		echo"<th>Codigo</th>";
		echo"<th>Nombre</th>";
		echo"<th>Apellido</th>";
		echo"<th>Correo</th>";

while ($row=mysqli_fetch_array($resultado)) {
 echo"<tr>";
    echo "<td>".$row['Codigo']." "."</td>";
    echo "<td>".$row['Nombre']." "."</td>";
    echo "<td>".$row['Apellido']." "."</td>";
    echo "<td>".$row['Correo']." "."</td>";
 echo"</tr>";
}

	echo"</table>"



?>
	<br/>
	<section>
	<form action="includes/crearEstudiante.php" method="POST">
	<label>Nombre</label><input type="text" name="Nombre" id="nombre">
	<br/>
	<label>Apellido</label><input type="text" name="Apellido" id="apellido">
	<br/>
	<label>Codigo</label><input type="text" name="Codigo" id="codigo">
	<br/>
	<label>Correo</label><input type="text" name="Correo" id="correo">
	<br/>
	<input type="submit" value="Registrar">
	</form>
	</section>

</body>
</html>