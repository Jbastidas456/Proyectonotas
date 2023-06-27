<?php 
	require_once('../../Conexion.php');
	require_once('../modelos/administrador.php');

	$admin = new Administrador();

	if ($_POST) {
		
	

	$Id = $_POST['Id'];
	$Nombreusu = $_POST['Nombre'];
	$Apellidousu = $_POST['apellido'];
	$Usuario = $_POST['usuario'];
	$Passwordusu = $_POST['contrasena'];
	$Perfil = $_POST['Perfil'];
	$Estado = $_POST['Estado'];

	$admin->updatead($Id,$Nombreusu,$Apellidousu,$Usuario,$Passwordusu,$Perfil,$Estado);

	}

 ?>