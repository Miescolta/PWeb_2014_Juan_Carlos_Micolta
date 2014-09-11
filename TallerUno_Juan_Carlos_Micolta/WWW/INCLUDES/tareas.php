<!DOCTYPE html>
<html>
<br/><br/>
<br/><br/>
<br/><br/>

<?php
include_once("database.php");

$query="SELECT * FROM talleruno_juan_carlos_micolta.tarea";
$resultado=mysqli_query($cxn,$query);

	echo"<table border='1' style='width:300px'>";
		echo"<th>Correo</th>";
		echo"<th>Fecha de Inicio</th>";
		echo"<th>Fecha de Finalizacion</th>";
		echo"<th>Descripcion</th>";
		echo"<th>Prioridad</th>";

while ($row=mysqli_fetch_array($resultado)) {
echo"<tr>";
echo "<td>".$row['Correo']." "."</td>";
echo "<td>".$row['fechaIni']." "."</td>";
echo "<td>".$row['fechaFin']." "."</td>";
echo "<td>".$row['descripcion']." "."</td>";
echo "<td>".$row['prioridad']." "."</td>";
echo"</tr>";
}

	echo"</table>"




?>

<button><a href="enviarTarea.php">Agregar Tarea</a></button>
</body>
</html>