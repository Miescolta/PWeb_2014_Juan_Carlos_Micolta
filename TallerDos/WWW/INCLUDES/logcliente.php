			<?php 
			session_start();
			$contador = 0;
			include_once('database.php');
			$query = "SELECT * FROM clientes WHERE usuario = '".$_POST['usuario']."' AND contrasena = '".$_POST['contrasena']."'";
			$result = mysqli_query($cxn,$query);
			while ($fila = mysqli_fetch_array($result)) {
				$contador++;
				$_SESSION['usuario'] = $fila['id'];
			}
			if ($contador > 0){
			$query = "INSERT INTO pedidos VALUES (NULL,".$_SESSION['usuario'].",'".date('U')."','0')";
			$result = mysqli_query($cxn,$query);

			$query = "SELECT * FROM pedidos WHERE id_cliente = '".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1";
			$result = mysqli_query($cxn,$query);

			while ($fila = mysqli_fetch_array($result)) {
				$_SESSION['id_pedido'] = $fila['id'];
			}

			echo $_SESSION['id_pedido'];

			for ($i=0; $i < $_SESSION['contador'] ; $i++) { 
	
			$query = "INSERT INTO lineas_de_pedido VALUES (NULL,'".$_SESSION['id_pedido']."','".$_SESSION['producto'][$i]."','1' )";
			$result = mysqli_query($cxn,$query);

		}


		echo"<!DOCTYPE html>";
echo"<head>";
	echo"<title>Tienda</title>";
	echo"<meta charset="UTF-8">";
	echo"<script type="text/javascript" src="JS/jquery.js"></script>";
	echo"<script type="text/javascript" src="JS/codigo.js"></script>";
echo"</head>";
echo"<body>";
	echo"<div id="contenedor">";
		echo"<header>";
			echo"<h1>Tienda</h1>";
			echo"<h2>Subtitulo Tienda</h2>";

		echo"</header>";
		echo "Se ha realizado el Pedido, Sera enviado a la pagina de Inicio";
		session_destroy();
		echo "<meta http-equiv='refresh' content ='5; url=../index.php'>";
		echo"<footer></footer>";
	echo"</div>";

echo"</body>";
echo"</html>";


				}else{
				echo "el usuario no existe. Volviendo a la tienda";
				echo "<meta http-equiv='refresh' content ='5; url=../confirmar.php'>";
				}
			 ?>	
