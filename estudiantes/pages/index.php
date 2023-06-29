<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<div class="container">
	
<h1 style="color:darkblue;text-align: center;background: beige;">Lista De Estudiantes</h1> 




		<div col="col-auto-mt-5">

			<table class="table table-dark table-hover"> 
				<tr>

					<th>ID ESTUDIANTE</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>DOCUMENTO</th>
					<th>CORREO</th>
					<th>MATERIA</th>
					<th>DOCENTE</th>
					<th>PROMEDIO</th> 
					<th>FECHA REGISTRO</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
				
				<tbody>
					
					<?php

					require_once('../../Conexion.php');
					require_once('../modelos/estudiantes.php');

					$estu = new Estudiante();
					$datos = $estu->getes();
				
					foreach($datos as $datos){
					?>

					<tr>
						<td><?php echo $datos['ID_ESTUDIANTE'] ?></td>
						<td><?php echo $datos['Nombre'] ?></td>
						<td><?php echo $datos['Apellido'] ?></td>
						<td><?php echo $datos['Documento'] ?></td>
						<td><?php echo $datos['Correo'] ?></td>
						<td><?php echo $datos['Materia'] ?></td>
						<td><?php echo $datos['Docente'] ?></td>
						<td><?php echo $datos['Promedio'] ?></td>
						<td><?php echo $datos['FECHA_REGISTRO'] ?></td>

						
						<td><a href="editar.php?Id=<?php echo $datos['ID_ESTUDIANTE']?>" class="btn btn-danger">Actualizar</a></td>
						
						<td><a href="eliminar.php?Id=<?php echo $datos['ID_ESTUDIANTE']?>" class="btn btn-primary">Eliminar</a></td>
						</tr>

					<?php } ?>


				</tbody>


			</table>
			


		</div>


</div>



</body>
</html>