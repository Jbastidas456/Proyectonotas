<?php 
    require_once('../../Conexion.php');
    require_once('../modelos/administrador.php');

    $admin = new Administrador();

    $Id = $_POST['Id'];
    $Nombreusu = $_POST['Nombre'];
    $Apellidousu = $_POST['apellido'];
    $Usuario = $_POST['usuario'];
    $Passwordusu = $_POST['contraseña'];
    $Perfil = $_POST['Perfil'];
    $Estado = $_POST['Estado'];

    $admin->updatead($Id,$Nombre,$Apellido,$Usuario,$Password,$Perfil,$Estado);



 ?>