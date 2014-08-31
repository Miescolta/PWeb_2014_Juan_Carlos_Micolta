<?php 

	include_once("includes/database.php");
	

	$query= "SELECT estudiantes.Nombre AS Estudiante,
		sum(if(notas.nombre='Taller1',notasestudiantes.valorNotas,0)) AS 'Taller1',
		sum(if(notas.nombre='Taller2',notasestudiantes.valorNotas,0)) AS 'Taller2',
		sum(if(notas.nombre='Taller3',notasestudiantes.valorNotas,0)) AS 'Taller3'
		FROM notasestudiantes
		JOIN estudiantes ON notasestudiantes.codigoEstudiante = estudiantes.Codigo
		JOIN notas ON notasestudiantes.idNotas = notas.idNota
		GROUP by Estudiante";







	$resultado = mysqli_query($cxn,$query);

/*
	echo "print_r($resultado)";

*/	

	if (isset($_GET["Estudiante"])){
		$nombre = $_GET["Estudiante"];

		$queryDos= "SELECT estudiantes.Nombre AS Estudiante,
		sum(if(notas.nombre='Taller1',notasestudiantes.valorNotas,0)) AS 'Taller1',
		sum(if(notas.nombre='Taller2',notasestudiantes.valorNotas,0)) AS 'Taller2',
		sum(if(notas.nombre='Taller3',notasestudiantes.valorNotas,0)) AS 'Taller3'
		FROM notasestudiantes
		JOIN estudiantes ON notasestudiantes.codigoEstudiante = estudiantes.Codigo
		JOIN notas ON notasestudiantes.idNotas = notas.idNota
		WHERE estudiantes.Nombre =  '$nombre'
		GROUP BY Estudiante";

		echo "<h1>Notas de estudiante: '$nombre'</h1><br/>";



		$result = mysqli_query($cxn,$queryDos);

		echo"<table border='1' style='width:300px'>";

		while($row = mysqli_fetch_array($result)) {
				echo"<tr>
				<td> $row[Estudiante]</td>
				<td> $row[Taller1] </td>
		        <td> $row[Taller2] </td>
		        <td> $row[Taller3] </td>
		        </tr>";
		    }
		     echo"</table>";
      

	} else {
		echo"<h1> Lista de Notas Estudiantes </h1><br/>";


			echo"<table border='1' style='width:300px'>";

	echo"<tr> 
	         <th> Nombre </th><th> Taller 1 </th>
	         <th> Taller 2 </th><th> Taller 3 </th>
	      </tr>";

while($row = mysqli_fetch_array($resultado)) {
	echo"<tr>
				<td> <a href = 'notasestudiantes.php?Estudiante=$row[Estudiante]'>$row[Estudiante] </a></td>
				<td> $row[Taller1] </td>
		        <td> $row[Taller2] </td>
		        <td> $row[Taller3] </td>
		        </tr>";

      }

 echo"</table>";


	}



?>

