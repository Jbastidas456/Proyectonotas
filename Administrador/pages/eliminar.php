<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title></title>
</head>
<body>
			<h2>Eliminar usuario</h2>
	<?php 

		require_once('../../Conexion.php');
		require_once('../modelos/administrador.php');

		$admin = new Administrador();
		$Id = $_GET['Id'];
	 ?>


	<form action="../controladores/eliminarusuario.php" method="POST">
			
			<div class="form-group">
			
				<label>ID USUARIO</label>
				<input type="number" name="Id" placeholder="ingresar el id que quiere eliminar" >

	</div>

		<input type="submit" class="btn btn-primary" value="eliminar">
	</form>
</body>
</html>