<?php


include_once("includes/database.php");

$query="SELECT * FROM estudiantes_web.notas";
$resultado=mysqli_query($cxn,$query);


		echo"<table border='1' style='width:300px'>";
		echo"<th>idNota</th>";
		echo"<th>Nombre</th>";
		echo"<th>Porcentaje</th>";

while ($row=mysqli_fetch_array($resultado)) {
 echo"<tr>";
    echo "<td>".$row['idNota']." ". "</td>";
    echo "<td>".$row['nombre']." ". "</td>";
    echo "<td>".$row['porcentaje']." ". "</td>";
 echo"</tr>";
}


?>
</body></html>

