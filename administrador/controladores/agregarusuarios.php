<?php 

    require_once('../../Conexion.php');
    require_once('../modelos/Administrador.php');

    if ($_POST) {
        
        $admin = new Administrador();
        $Nombre = $_POST['nom'];
        $Apellido = $_POST['ape'];
        $Usuario = $_POST['usu'];
        $Password = MD5($_POST['con']);
        $Perfil = $_POST['txtPerfil'];
        $Estado = $_POST['Estado'];

        $admin->agregarad($Nombre,$Apellido,$Usuario,$Password,$Perfil,$Estado);

    }


 ?>