<?php 
    require_once('../../Conexion.php');
    require_once('../modelos/estudiantes.php');

    $estu = new Estudiante(); 
    if ($_POST) {
    	
   

    $Id = $_POST['Id'];
    $Nombre = $_POST['nom'];
    $Apellido = $_POST['ape'];
    $Documento = $_POST['docu'];
    $Correo = $_POST['co'];
    $Materia = $_POST['mate'];
    $Docente = $_POST['docen'];
    $Promedio = $_POST['pro'];
    $FECHA_REGISTRO  = $_POST['fech'];




    $estu->updatead($Id,$Nombre,$Apellido,$Documento,$Correo,$Materia,$Docente,$Promedio,$FECHA_REGISTRO);

 }

 ?>