<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 



	<?php

	include_once('../../Conexion.php');
	include_once('../modelos/administrador.php');

	$Id = $_GET['Id'];
	$admin = new Administrador(); 
	$row=$admin->getidad($Id);
	if ($row) {
		
	



	?>
	<form  action="../controladores/editar.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $Id?>">
	<div class="content">
<label>Nombre</label>
<input type="text"  name="nom" value="<?php echo $row['Nombre']?>">
<hr>
<label>Apellido</label>
<input type="text" name="ape" value="<?php echo $row['Apellido']?>">
<hr>
<label>Usuario</label>
<input type="text"  name="usu"  value="<?php echo $row['Usuario']?>">
<hr>
<label>Contraseña</label>
<input type="number" name="con"  value="<?php echo $row['Password']?>">
<hr>
<div class="form-group">
  <label>Perfil</label>

                <label for="Perfil"></label>
                <select class="form-select" name="txtPerfil">

                <option selected  value="<?php echo $row['Perfil']?>">Elegir opcion</option>
                <option value="administrador">Administrador</option>
                <option value="docentes">Docentes</option>

            </select>
        </div>
<hr>
        <div class="form-group">
        <label>Estado</label>

                <label for="Estado"></label>
             <select class="form-select" name="Estado"  value="<?php echo $row['Estado']?>">
                <option selected>Elegir opcion</option>
                <option value="activo">activo</option>
                <option value="inactivo">inactivo</option>
            </select>
        </div>
<hr>


<button type="submit">Actualizar</button>

</div>

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