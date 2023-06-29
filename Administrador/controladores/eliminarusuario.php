<?php  

	require_once('../../Conexion.php');
	require_once('../modelos/administrador.php');


	$ad= new Administrador();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$Id = $_POST['Id'];
			$result=$ad->deletead($Id);

			if ($result) {
				print "<script>alert('Usuario eliminado');
				window.location='../pages/index.php';</script>";
			}else{

				print "<script>alert('Usuario no se puede eliminar');
				window.location='../pages/eliminar.php';</script>";
			}
	}
?>