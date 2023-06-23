<?php 

	require_once('../../Conexion.php');
	require_once('../modelos/materias.php');

	if ($_POST) {
		
		$mates = new materias();
		$Nombremate = $_POST['materia'];
		

		$mates->agregarad($Nombremate);

	}


 ?>