<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title></title>
</head>
<body>
			<h2>Eliminar materia</h2>
	<?php 

		require_once('../../Conexion.php');
		require_once('../modelos/materias.php');

		$mate = new materias();
		$Id = $_GET['Id'];
	 ?>


	<form action="../controladores/eliminarmaterias.php" method="POST">
			
			<div class="form-group">
			
				<label>ID MATERIA</label>
				<input type="number" name="Id" placeholder="ingresar el id que quiere eliminar" >

	</div>

		<input type="submit" class="btn btn-primary" value="eliminar">
	</form>
</body>
</html>