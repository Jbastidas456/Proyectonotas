<?php 

	require_once('../../Conexion.php');
	require_once('../modelos/docente.php');

	if ($_POST) {
		
		$doce = new docente();
		$Nombredoc = $_POST['nombredocente'];
		$Apellidodoc = $_POST['apellidodocente'];
		$Documentodoc = $_POST['documentodocente'];
		$Correodoc = $_POST['correodocente'];
		$Materiadoc = $_POST['materiadocente'];
		$Usuariodoc = $_POST['usuariodocente'];
		$Passworddoc = MD5($_POST['contrasenadocente']);
		$Perfil = $_POST['Perfildocente'];
		$Estadodoc = $_POST['Estadodocente'];

		$doce->agregarad($Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc ,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc);

	}


 ?>