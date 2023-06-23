<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 
	<form  action="../controladores/agregarestudiantes.php" method="POST">
	<div class="content">
<label>Nombre</label>
<input type="text"  name="nom">
<hr>
<label>Apellido</label>
<input type="text" name="ape">
<hr>
<label>Documento</label>
<input type="number"  name="docu">
<hr>
<label>Correo</label>
<input type="text" name="co">
<hr>
<label>Materia</label>
<input type="text" name="mate">
<hr>
<label>Docente</label>
<input type="text" name="docen">
<hr>
<label>Promedio</label>
<input type="number" name="pro">
<hr>
<label>FECHA_REGISTRO</label>
<input type="text" name="fech">
<hr>
<div class="form-group">



<button type="submit">registrar</button>

</div>

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
button{
	color: darkmagenta;
	background:grey ;
}


</style>

</body>
</html>