<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<div class="container">
	
<h1 style="color:darkblue;text-align: center;background: beige;">Lista De Usuarios</h1> 




		<div col="col-auto-mt-5">

			<table class="table table-dark table-hover"> 
				<tr>

					<th>ID USUARIO</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>USUARIO</th>
					<th>PERFIL</th>
					<th>ESTADO</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
				
				<tbody>
					
					<?php

					require_once('../../Conexion.php');
					require_once('../modelos/administrador.php');

					$ob = new Administrador();
					$datos = $ob->getad();
				
					foreach($datos as $datos){
					?>

					<tr>
						<td><?php echo $datos['ID_USUARIO'] ?></td>
						<td><?php echo $datos['Nombre'] ?></td>
						<td><?php echo $datos['Apellido'] ?></td>
						<td><?php echo $datos['Usuario'] ?></td>
						<td><?php echo $datos['Perfil'] ?></td>
						<td><?php echo $datos['Estado'] ?></td>
						
						<td><a href="editar.php?Id=<?php echo $datos['ID_USUARIO']?>" class="btn btn-danger">Actualizar</a></td>
						
						<td><a href="eliminar.php?Id=<?php echo $datos['ID_USUARIO']?>" class="btn btn-primary">Eliminar</a></td>
						</tr>

					<?php } ?>


				</tbody>


			</table>
			


		</div>


</div>



</body>
</html>