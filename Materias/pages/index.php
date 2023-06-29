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
		
		<h1 style="color: blue; text-align: center;">Listado de materias</h1>

		<div col="col-auto-mt-5">
			
			<table class="table table-dark table-hover">
				<tr>
					<th>ID Materias</th>
					<th>NOMBRE</th>


				</tr>


				<tbody>
					<?php 
						require_once('../../Conexion.php');
						require_once('../modelos/materias.php');

						$ob1 = new materias();
						$datos = $ob1->getad();



					                           

						 foreach($datos as $datos){
					 	 ?>	

					 <tr>
					 	<td><?php echo $datos['id_materia']?></td>
					 	<td><?php echo $datos['Nombremate']?></td>
					 	
					 	<td><a href="editar.php?Id=<?php echo $datos['id_materia']?>" class="btn btn-danger">Actualizar</a></td>
                        
                        <td><a href="eliminar.php?Id=<?php echo $datos['id_materia']?>" class="btn btn-primary">Eliminar</a></td>

					 </tr>

<?php  } ?>

				</tbody>

			</table>



		</div>


	</div>


</body>
</html>