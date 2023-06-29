<?php 
	require_once('../../Conexion.php');
	require_once('../modelos/materias.php');

	$mate = new materias();

	if ($_POST) {
		
	

	$Id = $_POST['Id'];
	$Nombremate = $_POST['materia'];


	$mate->updatead($Id,$Nombremate);

	}

 ?>