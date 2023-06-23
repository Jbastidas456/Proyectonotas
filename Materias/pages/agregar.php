<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title>Login</title>
</head>
<body>
	<form class="container" action="../controladores/agregarmaterias.php" method="POST">
			<h1>materias</h1>
		<div class="form-group">
			<label>Nombre de la materia</label>
			<input type="text" name="materia">
		</div>

		<div class="form-group">
			<input type="submit" name="mate" value="r.materia">
		</div>
	</form>
</body>
</html>