<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 

	<?php

	require_once('../../Conexion.php');
	require_once('../modelos/estudiantes.php');

	$Id = $_GET['Id'];
	$estu = new Estudiante(); 
	$row=$estu->getides($Id);
	if ($row) {
		
		
	?>
	<form  action="../controladores/editarestudiante.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $Id?>">
	<div class="content">
		
<label>Nombre</label>
<input type="text"  name="nom" value="<?php echo $row['Nombre']?>">
<hr>

<label>Apellido</label>
<input type="text" name="ape" value="<?php echo $row['Apellido']?>">
<hr>

<label>Documento</label>
<input type="text"  name="docu"  value="<?php echo $row['Documento']?>">
<hr>

<label>Correo</label>
<input type="number" name="co"  value="<?php echo $row['Correo']?>">
<hr>

<div class="form-group">
  <label>Materia</label>
  <input type="text" name="mate" value="<?php echo $row['Materia']?>">
<hr>
  <label>Docente</label>
  <input type="text" name="docen"value="<?php echo $row['Docente']?>">
<hr>

  <label>Promedio</label>
  <input type="text" name="pro"value="<?php echo $row['Promedio']?>">

<hr>
  <label>FECHA_REGISTRO</label>
  <input type="text" name="fech" value="<?php echo $row['FECHA_REGISTRO']?>">
              
        </div>        </div>



<button type="submit">Actualizar</button>



</form>

<?php }?>



<style>
	
	h1
	{
color: darkmagenta;

text-align: center;

}
.content
{

	 color: darkmagenta;
	border: solid;
	text-align: center; 
	border-color: black;

} 
form{
	background-color:beige;
}
button{
	color: darkmagenta;
	background:grey;
}


</style>


</body>
</html>