<?php

require_once('../../Conexion.php'); 
require_once('../modelos/administrador.php');

$admin= new Administrador;
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$Id = $_POST['Id']; 
	$result=$admin->delete($Id);


	if ($result) 
	{
	
			print "<script>alert('usuario eliminado');window.location='../pages/index.php';</script>";
		}else{
				print "<script>alert('usuario  no eliminado');window.location='../pages/index.php';</script>";
		}
	}





?>