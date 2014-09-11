<?php

include_once("database.php");

$correo = $_POST ["Correo"];
$fechaIni = $_POST ["fechaIni"];
$fechaFin = $_POST ["fechaFin"];
$descripcion = $_POST ["descripcion"];
$prioridad = $_POST ["prioridad"];
	/*Aqui se envia la informacion escrita a el php de agregar tareas para que este se encargue de realizar la accion deseada
	*/
$query="INSERT INTO talleruno_juan_carlos_micolta.tarea (`idTarea`,`Correo`, `fechaIni`, `fechaFin`, `descripcion`, `prioridad`)  VALUES ('','$correo','$fechaIni','$fechaFin','$descripcion','$prioridad')";
$resultado=mysqli_query($cxn,$query);

header('Location:perfilUsuario.php');
?>



