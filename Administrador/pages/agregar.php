<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title>registro de usuarios</title>
</head>
<body>
	<form class="container" action="../controladores/agregarusuarios.php" method="POST">
			<h1>registro de usuarios</h1>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="Nombre">
		</div>

		<div class="form-group">
			<label>apellido</label>
			<input type="text" name="apellido">
		</div>

		<div class="form-group">
			<label>usuario</label>
			<input type="text" name="usuario">
		</div>

		<div class="form-group">
			<label>contraseña</label>
			<input type="password" name="contraseña">
		</div>
		
		<div class="form-group">
			<p>Perfil</p>

				<label for="Perfi"></label>
				<select class="form-select" name="Perfil">

				<option selected>Elegir opcion</option>
				<option value="administrador">Administrador</option>
				<option value="docentes">Docentes</option>

			</select>
		</div>

		<div class="form-group">
			<p>Estado</p>

				<label for="Estado"></label>
				<select class="form-select" name="Estado">

				<option selected>Elegir opcion</option>
				<option value="activo">activo</option>
				<option value="inactivo">inactivo</option>
			</select>
		</div>

		<div class="form-group">
			<input type="submit" name="ini" value="registro">
		</div>
	</form>
</body>
</html>