<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h2>Eliminar Estudiante</h2> 

<?php

require_once('../../Conexion.php'); 
require_once('../modelos/estudiantes.php'); 


$estu = new Estudiante(); 
$Id = $_GET['Id'];

?>
<form action="../controladores/eliminarestudiantes.php">
	
<label>ID ESTUDIANTE</label>
<input type="number" name="Id" placeholder="Ingresar el Id que desea eliminar">

<hr>

<input type="submit" class="btn-btn-primary" value="eliminar">

</form>


<style>
	
	h1
	{
color: darkmagenta;

text-align: center;

}
.content
{

	 color: darkmagenta;;
	border: solid;
	text-align: center; 
	border-color: black;

} 
form{
	background-color:beige  ;
}
input{
	color: white;  
color: BLACK;
}


</style>


</body>
</html>