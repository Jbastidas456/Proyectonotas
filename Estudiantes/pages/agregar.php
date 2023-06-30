<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<title>registro de estudiantes</title>
</head>
<body>
	<?php
        require_once('../../Conexion.php');
        require_once('../../consultas.php');

        $consul = new Consulta();
    ?>

	<form class="container" action="../controladores/agregarestudiantes.php" method="POST">

			<h1>registro de estudiantes</h1>

		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombreestudiante">
		</div>

		<div class="form-group">
			<label>apellido</label>
			<input type="text" name="apellidoestudiante">
		</div>

		<div class="form-group">
			<label>Documento</label>
			<input type="text" name="DOCU">
		</div>

		<div class="form-group">
			<label>correo</label>
			<input type="text" name="correoestudiante">
		</div>
		
		<div class="form-group">
 	  	<label for="Materia">Materia</label>
	 	  	<select name="materiaestudiante" class="form-control input-lg" id="Materia">
	 	  		<option>seleccionar</option>

			 	  	<?php 
						 		$mate = $consul->getmaterias();
						 		if($mate != null)
								{
									foreach($mate as $ma){

					?>
					<option value="<?php echo $ma['Nombremate'];?>"><?php echo $ma['Nombremate']; ?></option>

					 <?php 
							}
						}
		 	  		?>
	 	  	</select>
 	  	</div>

		<div class="form-group">
	 	  <label for="Docente">Docente</label>
		 	  <select name="docenteestudiante" class="form-control input-lg" id="Docente">
					<option>seleccionar</option>

			 	  		<?php 
						 		$doc = $consul->getdocentes();
						 		if($doc != null)
								{
									foreach($doc as $do){

					?>
					<option value="<?php echo $do['Nombreusu'];?>"><?php echo $do['Nombreusu']; ?></option>

					 <?php 
							}
						}
		 	  		?>
		 	  </select>
 		</div>

		<div class="form-group">
			<label>Promedio</label>
			<input type="number" name="promedioestudiante">
		</div>

		<div class="form-group">
			<label>Fecha_registro</label>
			<input type="date" name="fech">
		</div>

		<div class="form-group">
			<input type="submit" name="ini" value="registro">
		</div>
	</form>
</body>
</html>