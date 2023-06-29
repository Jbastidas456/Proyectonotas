<?php 
	require_once('../../Conexion.php');
	require_once('../modelos/docente.php');

	$do = new docente();

	if ($_POST) {
		
	

	$Id = $_POST['Id'];
	$Nombredoc = $_POST['nombredocente'];
	$Apellidodoc = $_POST['apellidodocente'];
	$Documentodoc = $_POST['documentodocente'];
	$Correodoc = $_POST['correodocente'];
	$Materiadoc = $_POST['materiadocente'];
	$Usuariodoc = $_POST['usuariodocente'];
	$Passworddoc = $_POST['contrasenadocente'];
	$Perfil = $_POST['Perfildocente'];
	$Estadodoc = $_POST['Estadodocente'];

	$do->updatead($Id,$Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfil,$Estadodoc);

	}

 ?>