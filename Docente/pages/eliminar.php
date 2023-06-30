<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title></title>
</head>
<body>
			<h2>Eliminar Docente</h2>
	<?php 

		require_once('../../Conexion.php');
		require_once('../modelos/docente.php');

		$doce = new docente();
		$Id = $_GET['Id'];
	 ?>


	<form action="../controladores/eliminardocentes.php" method="POST">
			
			<div class="form-group">
			
				<label>ID DOCENTE</label>
				<input type="number" name="Id" placeholder="ingresar el id que quiere eliminar" >

	</div>

		<input type="submit" class="btn btn-primary" value="eliminar">
	</form>
</body>
</html>