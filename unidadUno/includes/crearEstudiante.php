<?php

include_once("database.php");

$nombre = $_POST ["Nombre"];
$apellido = $_POST ["Apellido"];
$codigo = $_POST ["Codigo"];
$correo = $_POST ["Correo"];

echo "<h1>Bienvenido</h1>".$nombre;


$query="INSERT INTO estudiantes_web.estudiantes (`Codigo`, `Nombre`, `Apellido`, `Correo`) VALUES ('$codigo','$nombre','$apellido','$correo')";
/*echo"$query";
*/
$resultado=mysqli_query($cxn,$query);

echo"<a href = 'estudiantes.php'><button type='button'>Regresar</button></a>";

?>