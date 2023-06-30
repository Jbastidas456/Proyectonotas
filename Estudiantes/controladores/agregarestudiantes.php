<?php 

	require_once('../../Conexion.php');
	require_once('../modelos/estudiantes.php');

	if ($_POST) {
		
		$est = new estudiantes();
		$Nombreestu = $_POST['nombreestudiante'];
		$Apellidoestu = $_POST['apellidoestudiante'];
		$Docuestu = $_POST['DOCU'];
		$Correoest = $_POST['correoestudiante'];
		$Materiaestu = $_POST['materiaestudiante'];
		$Docente = $_POST['docenteestudiante'];
		$Promedioestu = $_POST['promedioestudiante'];
		$Fecha_registro = $_POST['fech'];

		$est->agregarad($Nombreestu,$Apellidoestu,$Docuestu,$Correoest,$Materiaestu,$Docente,$Promedioestu,$Fecha_registro);

	}


 ?>