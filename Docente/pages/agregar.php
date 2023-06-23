<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title>registro de usuarios</title>
</head>
<body>
	<form class="container" action="../controladores/agregardocentes.php" method="POST">
			<h1>registro de usuarios</h1>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombredocente">
		</div>

		<div class="form-group">
			<label>apellido</label>
			<input type="text" name="apellidodocente">
		</div>

		<div class="form-group">
			<label>digite numero de documento</label>
			<input type="text" name="documentodocente">
		</div>

		<div class="form-group">
			<label>correo electronico</label>
			<input type="text" name="correodocente">
		</div>

		<div class="form-group">
			<label>materia</label>
			<input type="text" name="materiadocente">
		</div>


		<div class="form-group">
			<label>usuario</label>
			<input type="text" name="usuariodocente">

		</div>

		<div class="form-group">
			<label>contraseña</label>
			<input type="password" name="contrasenadocente">
		</div>
		
		<div class="form-group">
			<p>Perfil</p>

				<label for="Perfi"></label>
				<select class="form-select" name="Perfildocente">

				<option selected>Elegir opcion</option>
				<option value="administrador">Maestros</option>
				<option value="docentes">administrador</option>

			</select>
		</div>

		<div class="form-group">
			<p>Estado docente</p>

				<label for="Estado"></label>
				<select class="form-select" name="Estadodocente">

				<option selected>Elegir opcion</option>
				<option value="activo">activo</option>
				<option value="inactivo">inactivo</option>
			</select>
		</div>

		<div class="form-group">
			<input type="submit" name="doc" value="R.docente">
		</div>
	</form>
</body>
</html>