<html>
<head>
	<title>Notas de Estudiantes</title>
	<meta charset="utf-8">
</head>


<body>
	<br/>
	<section>
	<form action="agregarTarea.php" method="POST">
	<label>Correo</label><input type="text" name="Correo" id="correo">
	<br/>
	<label>Fecha de Inicio</label><input type="date" name="fechaIni" id="fechaIni">
	<br/>
	<label>Fecha de Finalizacion</label><input type="date" name="fechaFin" id="fechaFin">
	<br/>
	<label>Descripcion</label><input type="text" name="descripcion" id="descripcion">
	<br/>
	<label>Prioridad</label><input type="number" name="prioridad" min="1"  max="3" >
	<br/>
	<input type="submit" value="Enviar">
	</form>
	</section>

</body>
</html>