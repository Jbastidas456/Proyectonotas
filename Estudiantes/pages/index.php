<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		
		<h1 style="color: blue; text-align: center;">Listado de usuarios</h1>

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
					<th>FECHA DE REGISTRO</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>


				</tr>


				<tbody>
					<?php 
						require_once('../../Conexion.php');
						require_once('../modelos/estudiantes.php');

						$obj3 = new estudiantes();
						$datos = $obj3->getad();



					                           

						 foreach($datos as $datos){
					 	 ?>	

					 <tr>
					 	<td><?php echo $datos['id_estudiante']?></td>
					 	<td><?php echo $datos['Nombreestu']?></td>
					 	<td><?php echo $datos['Apellidoestu']?></td>
					 	<td><?php echo $datos['Docuestu']?></td>
					 	<td><?php echo $datos['Correoest']?></td>
					 	<td><?php echo $datos['Materiaestu']?></td>
					 	<td><?php echo $datos['Docente']?></td>
					 	<td><?php echo $datos['Promedioestu']?></td>
					 	<td><?php echo $datos['Fecha_registro']?></td>
					 	<td><a href="editar.php?Id=<?php echo $datos['id_estudiante']?>" class="btn btn-danger">Actualizar</a></td>
                        
                        <td><a href="eliminar.php?Id=<?php echo $datos['id_estudiante']?>" class="btn btn-primary">Eliminar</a></td>

					 </tr>

<?php  } ?>

				</tbody>

			</table>



		</div>


	</div>


</body>
</html>