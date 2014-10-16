<?php 
session_start();
$suma=0;
if (isset($_GET['p'])) {
	$_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
	$_SESSION['contador']++;
}

include_once('database.php');
echo "<table>";
for ($i=0; $i < $_SESSION['contador'] ; $i++) { 
	//echo "Producto".$_SESSION['contador'][$i]."<br>";
	$query = "SELECT * FROM productos WHERE id=".$_SESSION['producto'][$i]."";
	$result = mysqli_query($cxn,$query);
	while ($fila = mysqli_fetch_array($result)) {
		echo "<tr><td>".$fila['nombre']."</td><td>".$fila['precio']."</td></tr>";
		$suma+=$fila['precio']; 
	}
}
echo "<tr><td>SubTotal</td><td>".$suma."</td></tr>";
echo "</table>";

 ?>