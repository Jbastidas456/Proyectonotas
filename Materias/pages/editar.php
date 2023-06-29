<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body>

	<?php 

		require_once('../../Conexion.php');
		require_once('../modelos/materias.php');

		$Id = $_GET['Id'];
		$mate = new materias();
		$row=$mate->getidad($Id);

		if ($row) {
			
		


	?>
	<form class="container" action="../controladores/editarmateria.php" method="POST">

		<input type="hidden" name="Id" value="<?php echo $Id ?>">

			<h1>editar materias</h1>

		<div class="form-group">
			<label>Nombre de la materia</label>
			<input type="text" name="materia" value="<?php  echo $row['Nombremate']?>">
		</div>

		<div class="form-group">
			<input type="submit" name="mate" value="r.materia">
		</div>
	</form>

	<?php } ?>
</body>
</html>