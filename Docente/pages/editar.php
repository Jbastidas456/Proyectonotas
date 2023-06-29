<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title>editar usuarios</title>
</head>
<body>


	<?php 

		require_once('../../Conexion.php');
		require_once('../modelos/docente.php');

		$Id = $_GET['Id'];
		$do = new docente();
		$row=$do->getidad($Id);

		if ($row) {
			
		


	?>
	<h1>actualizacion de docentes</h1>
	<form class="container" action="../controladores/editardocente.php" method="POST">
			<h1>registro de usuarios</h1>

			<input type="hidden" name="Id" value="<?php echo $Id ?>">
		<div class="form-group">

			<label>Nombre</label>
			<input type="text" name="nombredocente" value="<?php  echo $row['Nombredoc']?>">
		</div>

		<div class="form-group">
			<label>apellido</label>
			<input type="text" name="apellidodocente" value="<?php  echo $row['Apellidodoc']?>">
		</div>

		<div class="form-group">
			<label>digite numero de documento</label>
			<input type="text" name="documentodocente" value="<?php  echo $row['Documentodoc']?>">
		</div>

		<div class="form-group">
			<label>correo electronico</label>
			<input type="text" name="correodocente" value="<?php  echo $row['Correodoc']?>">
		</div>

		<div class="form-group">
			<label>materia</label>
			<input type="text" name="materiadocente" value="<?php  echo $row['Materiadoc']?>">
		</div>


		<div class="form-group">
			<label>usuario</label>
			<input type="text" name="usuariodocente" value="<?php  echo $row['Usuariodoc']?>">

		</div>

		<div class="form-group">
			<label>contraseña</label>
			<input type="password" name="contrasenadocente" value="<?php  echo $row['Passworddoc']?>">
		</div>
		
		<div class="form-group">
			<p>Perfil</p>

				<label for="Perfil"></label>
				<select class="form-select" name="Perfildocente" value="<?php  echo $row['Perfil']?>">

				<option selected>Elegir opcion</option>
				<option value="docente">Docente</option>
				<option value="administrador">administrador</option>

			</select>
		</div>

		<div class="form-group">
			<p>Estado docente</p>

				<label for="Estado"></label>
				<select class="form-select" name="Estadodocente" value="<?php  echo $row['Estadodoc']?>">

				<option selected>Elegir opcion</option>
				<option value="activo">activo</option>
				<option value="inactivo">inactivo</option>
			</select>
		</div>

		<div class="form-group">
			<input type="submit" name="doc" value="actualizar">
		</div>
	</form>

	<?php } ?>
</body>
</html>