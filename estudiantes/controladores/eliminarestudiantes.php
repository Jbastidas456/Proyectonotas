<?php  

    require_once('../../Conexion.php');
    require_once('../modelos/estudiantes.php');


    $estu= new Estudiante();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $Id = $_POST['Id'];
            $result=$estu->deletead($Id);

            if ($result) {
                print "<script>alert('Usuario eliminado');
                window.location='../pages/index.php';</script>";
            }else{

                print "<script>alert('Usuario no se puede eliminar');
                window.location='../pages/eliminar.php';</script>";
            }
    }
?>