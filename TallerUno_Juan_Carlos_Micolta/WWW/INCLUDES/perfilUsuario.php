<!DOCTYPE html>
<html>
<br/><br/>
<?php
include_once("database.php");

$query="SELECT * FROM talleruno_juan_carlos_micolta.usuario";
$resultado=mysqli_query($cxn,$query);

	echo"<table border='1' style='width:300px'>";
		echo"<th>Nombre de Usuarios</th>";
		echo"<th>Correo</th>";

while ($row=mysqli_fetch_array($resultado)) {
 echo"<tr>";
    echo "<td>".$row['Nombre']." "."</td>";



echo "<article id='".$row["Correo"]."'>";
echo "<td>
<a href='usuarioIndividual.php?correo=".$row["Correo"]."'>".$row["Correo"]."</a></td>";
 echo"</tr>";
}

	echo"</table>"




?>

<br/><br/>
<br/><br/>
<button><a href="index.php">Cerrar Sesion</a></button>
<br/><br/>
<button><a href="tareas.php">Ver Tarea</a></button>
</body>
</html>