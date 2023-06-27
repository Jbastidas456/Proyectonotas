<?php 
    require_once('../../Conexion.php');
    require_once('../modelos/administrador.php');

    $admin = new Administrador(); 
    if ($_POST) {
    	
   

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['apellido'];
    $Usuario = $_POST['usuario'];
    $Password = $_POST['contraseña'];
    $Perfil = $_POST['txtPerfil'];
    $Estado = $_POST['Estado'];

    $admin->updatead($Id,$Nombre,$Apellido,$Usuario,$Password,$Perfil,$Estado);

 }

 ?>