<?php
session_start();
include_once("database.php");

$correo=$_POST['Correo'];
$password=$_POST['Contrasena'];


if(isset($correo) && !empty($correo) && 
isset($password) && !empty($password))

{
	$query="SELECT talleruno_juan_carlos_micolta.usuario.Correo,talleruno_juan_carlos_micolta.usuario.Contrasena FROM talleruno_juan_carlos_micolta.usuario WHERE `Correo` ='$correo'";
	$result=mysqli_query($cxn,$query);


/*
Para esta primera parte del Login se utilizo un video que explicaba muy buien una de las posibles realizaciones de un login el link se precenta acontinuacion : https://www.youtube.com/watch?v=MEvL5TyLSXc&index=26&list=PLF02659CF8418C229
se utiliza este archivo php para confirmar que lo escrito en el indes o login hace parte de una base de datos para poder ingresar.
*/

while ($row = mysqli_fetch_array($result)) {
	if ($password == $row['Contrasena']){
	$_SESSION['Correo'] = $_POST['Correo'];
	header('Location:perfilUsuario.php');
	echo "sesion Iniciada";
} else {
	echo "error en la combinacion";
	header('Location:index.php');
}

}


}else
{
echo "campos vacios";	
}

?>