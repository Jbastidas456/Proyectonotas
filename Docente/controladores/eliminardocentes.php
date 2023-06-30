<?php  

	require_once('../../Conexion.php');
	require_once('../modelos/docente.php');


	$doce= new docente();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$Id = $_POST['Id'];
			$result=$doce->deletead($Id);

			if ($result) {
				print "<script>alert('dcoente eliminada');
				window.location='../pages/index.php';</script>";
			}else{

				print "<script>alert(' no se puede eliminar');
				window.location='../pages/eliminar.php';</script>";
			}
	}
?>