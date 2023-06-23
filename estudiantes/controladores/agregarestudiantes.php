<?php 

    require_once('../../Conexion.php');
    require_once('../modelos/estudiantes.php');

    if ($_POST) {
        
        $estu = new Estudiante();
        $Nombre = $_POST['nom'];
        $Apellido = $_POST['ape'];
        $Documento = $_POST['docu'];
        $Correo = $_POST['co'];
        $Materia = $_POST['mate'];
        $Docente = $_POST['docen'];
        $Promedio = $_POST['pro'];
        $FECHA_REGISTRO = $_POST['fech'];

        $estu->agregarad($Nombre,$Apellido,$Documento,$Correo,$Materia,$Docente,$Promedio,$FECHA_REGISTRO);

    }


 ?>