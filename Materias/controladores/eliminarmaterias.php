<?php  

	require_once('../../Conexion.php');
	require_once('../modelos/materias.php');


	$mate= new materias();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$Id = $_POST['Id'];
			$result=$mate->deletead($Id);

			if ($result) {
				print "<script>alert('Materia eliminada');
				window.location='../pages/index.php';</script>";
			}else{

				print "<script>alert(' no se puede eliminar');
				window.location='../pages/eliminar.php';</script>";
			}
	}
?>