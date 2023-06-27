<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title>registro de usuarios</title>
</head>
<body>


	<?php 

		require_once('../../Conexion.php');
		require_once('../modelos/administrador.php');

		$Id = $_GET['Id'];
		$admin = new Administrador();
		$row=$admin->getidad($Id);

		if ($row) {
			
		


	?>
	<h1>actualizacion de usuarios</h1>
	<form class="container" action="../controladores/editarusuario.php" method="POST">

			

		<input type="hidden" name="Id" value="<?php echo $Id ?>">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="Nombre" value="<?php  echo $row['Nombreusu']?>">
		</div>

		<div class="form-group">
			<label>apellido</label>
			<input type="text" name="apellido" value="<?php  echo $row['Apellidousu']?>">
		</div>

		<div class="form-group">
			<label>usuario</label>
			<input type="text" name="usuario" value="<?php  echo $row['Usuario']?>">
		</div>

		<div class="form-group">
			<label>contraseña</label>
			<input type="password" name="contrasena" value="<?php  echo $row['Passwordusu']?>">
		</div>
		
		<div class="form-group">
			<p>Perfil</p>

				<label for="Perfil"></label>
				<select class="form-select" name="Perfil" value="<?php  echo $row['Perfil']?>">

				<option selected>Elegir opcion</option>
				<option value="administrador">Administrador</option>
				<option value="docentes">Docentes</option>

			</select>
		</div>

		<div class="form-group">
			<p>Estado</p>

				<label for="Estado"></label>
				<select class="form-select" name="Estado" value="<?php  echo $row['Estado']?>">

				<option selected>Elegir opcion</option>
				<option value="activo">activo</option>
				<option value="inactivo">inactivo</option>
			</select>
		</div>

		<div class="form-group">
			<input type="submit" name="ini" value="actualizar">
		</div>
	</form>

	<?php } ?>
</body>
</html>