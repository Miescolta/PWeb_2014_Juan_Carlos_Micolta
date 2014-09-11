<?php

include_once("database.php");

$nombre = $_POST ["Nombre"];
$apellido = $_POST ["Apellido"];
$correo = $_POST ["Correo"];
$password = $_POST ["Contrasena"];

echo "<h1>Bienvenido</h1>".$nombre;


$query="INSERT INTO talleruno_juan_carlos_micolta.usuario (`idUsuario`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES ('','$nombre','$apellido','$correo','$password')";
$resultado=mysqli_query($cxn,$query);

header('Location:index.php');
?>






