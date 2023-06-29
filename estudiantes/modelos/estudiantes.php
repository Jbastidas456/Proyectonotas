<?php

include_once('../../Conexion.php');

Class Estudiante extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}

	public function agregarad($Nombrees,$Apellidoades,$Documentoes,$Correoes,$Materia,$Docentees,$Promedio,$FECHA_REGISTRO)
	{
		$statement=$this->db->prepare("INSERT INTO estudiantes(Nombre,Apellido,Documento,Correo,Materia,Docente,Promedio,FECHA_REGISTRO)values(:Nombrees,:Apellidoades,:Documentoes,:Correoes,:Materia,:Docentees,:Promedio,:FECHA_REGISTRO)");

		$statement->bindParam(":Nombrees",$Nombrees);
		$statement->bindParam(":Apellidoades",$Apellidoades);
		$statement->bindParam(":Documentoes",$Documentoes);
		$statement->bindParam(":Correoes",$Correoes);
		$statement->bindParam(":Materia",$Materia);
		$statement->bindParam(":Docentees",$Docentees);
		$statement->bindParam(":Promedio",$Promedio);
		$statement->bindParam(":FECHA_REGISTRO",$FECHA_REGISTRO);

		if ($statement->execute()) {
			echo "Estudiante registrado";
			header('location:../pages/index.php');

		}else{
			echo "no se puede registrar el Estudiante";
			header('location: ../pages/agregar.php');
		}

	}

	public function getes()
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes "); 
		$statement->execute();
		while ($resul=$statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;
	}

	public function getides($Id)
	{
		/*$row=null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE Documentoes='Estudiante'and ID_ESTUDIANTE=$Id"); 
		$statement->bindParam(':Id',$Id); 
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;*/



		$sql="SELECT * FROM estudiantes WHERE ID_ESTUDIANTE=$Id ";
		$resultado=$this->db->query($sql);
		if ($resultado->rowCount()>0) {
			while ($resul=$resultado->fetch()) {
				$result[]=$resul;
			}
		}
		return $result;

	}
	public function updatead($Nombrees,$Apellidoades,$Documentoes,$Correoes,$Materia,$Docentees,$Promedio,$FECHA_REGISTRO)
	{
		$statement=$this->db->prepare("UPDATE estudiantes SET Nombre=:Nombrees,Apellido=:Apellidoes,Documento=:Documentoes,Correo=:Correoes,Materia=:Materia WHERE ID_ESTUDIANTE=$Id");

		$statement->bindParam(":Nombrees",$Nombrees);
		$statement->bindParam(":Apellidoades",$Apellidoades);
		$statement->bindParam(":Documentoes",$Documentoes);
		$statement->bindParam(":Correoes",$Correoes);
		$statement->bindParam(":Materia",$Materia);
		$statement->bindParam(":Docentees",$Docentees);
		$statement->bindParam(":Promedio",$Promedio);
		$statement->bindParam(":FECHA_REGISTRO",$FECHA_REGISTRO);
	}

	public function delete($Id)

	{
		$statement=$this->db->prepare("DELETE * FROM Documento WHERE ID_ESTUDIANTE=Id");
		$statement=bindParam(':Id',$Id);
		if($statement->execute())
		{
			echo "Estudiante eliminado";
			header('location: ../pages/index.php');
		}else{
			echo "el Estudiante no se puede eliminar";
			header('location: ../pages/eliminar.php');
		}
	}

}
?>