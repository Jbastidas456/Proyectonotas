<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Login</title>
</head>
<body>
	<form class="container" action="administrador/pages/agregar.php">
			<h1>Iniciar sesion</h1>
		<div class="form-group">
			<label>Usuario</label>
			<input type="text" name="Usuario">
		</div>

		<div class="form-group">
			<label>contraseña</label>
			<input type="password" name="contraseña">
		</div>

		<div class="form-group">
			<a href="#">¿Contraseña olvidada?</a>
		</div>
		
		<div class="form-group">
			<input type="submit" name="ini" value="Iniciar sesion">
		</div>

		<div class="form-group">
			<a href="http://localhost/actividad/administrador/pages/agregar.php"><label>No tiene cuenta?</label>Incribirse</a>
		</div>
	</form>
</body>
</html>
