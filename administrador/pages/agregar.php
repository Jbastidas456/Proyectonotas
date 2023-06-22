<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 
	<form  action="../controladores/agregarusuarios.php" method="POST">
	<div class="content">
<label>Nombre</label>
<input type="text"  name="nom">
<hr>
<label>Apellido</label>
<input type="text" name="ape">
<hr>
<label>Usuario</label>
<input type="text"  name="usu">
<hr>
<label>Contraseña</label>
<input type="number" name="con">
<hr>
<div class="form-group">
  <label>Perfil</label>

                <label for="Perfil"></label>
                <select class="form-select" name="txtPerfil">

                <option selected>Elegir opcion</option>
                <option value="administrador">Administrador</option>
                <option value="docentes">Docentes</option>

            </select>
        </div>
<hr>
        <div class="form-group">
        <label>Estado</label>

                <label for="Estado"></label>
             <select class="form-select" name="Estado">
                <option selected>Elegir opcion</option>
                <option value="activo">activo</option>
                <option value="inactivo">inactivo</option>
            </select>
        </div>
<hr>


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