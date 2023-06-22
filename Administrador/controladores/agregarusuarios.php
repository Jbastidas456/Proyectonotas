<?php 

	require_once('../../Conexion.php');
	require_once('../modelos/administrador.php');

	if ($_POST) {
		
		$admin = new Administrador();
		$Nombreusu = $_POST['Nombre'];
		$Apellidousu = $_POST['apellido'];
		$Usuario = $_POST['usuario'];
		$Passwordusu = MD5($_POST['contraseña']);
		$Perfil = $_POST['Perfil'];
		$Estado = $_POST['Estado'];

		$admin->agregarad($Nombreusu,$Apellidousu,$Usuario,$Passwordusu,$Perfil,$Estado);

	}


 ?>