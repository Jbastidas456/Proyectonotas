<?php

include_once('../../Conexion');

Class Estudiante extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}

	publi function agregarad($Nombrees,$Apellidoades,$Documentoes,$Correoes,$Materia,$Docentees,$Promedio,$FECHA_REGISTRO)
	{
		$statement=$this->db->prepare("INSERT INTO estudiantes(Nombre,Apellido,Documento,Correo,Materia,Docente,Promedio,FECHA_REGISTRO)values(:Nombrees,:Apellidoades,:Documentoes,:Correoes,:Materia,:Docente,:Promedio,:FECHA_REGISTRO,:'Estudiante',:'Activo')");

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
			header('location:../index.php')

		}else{
			echo "no se puede registrar el Estudiante";
			header('location: ../pages/agregar.php')
		}

	}

	public function getes()
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE Perfil='Estudiante'"); 
		$statement->execute();
		while ($resul=$statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;
	}

	public function getides($id)
	{
		$row=null
		$statement=$this-->db->prepare("SELECT * FROM estudiantes WHERE Documentoes='Estudiante'and ID_ESTUDIANTE=$id"); 
		$statement->bindParam(':id',$id); 
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;

	}
	public function updatead($Nombrees,$Apellidoades,$Documentoes,$Correoes,$Materia,$Docentees,$Promedio,$FECHA_REGISTRO)
	{
		$statement=$this->db->prepare("UPDATE estudiantes SET Nombre=:Nombrees,Apellido=:Apellidoes,Documento=:Documentoes,Correo=:Correoes,Materia=:Materia WHERE ID_ESTUDIANTE=$id");

		$statement->bindParam(":Nombrees",$Nombrees);
		$statement->bindParam(":Apellidoades",$Apellidoades);
		$statement->bindParam(":Documentoes",$Documentoes);
		$statement->bindParam(":Correoes",$Correoes);
		$statement->bindParam(":Materia",$Materia);
		$statement->bindParam(":Docentees",$Docentees);
		$statement->bindParam(":Promedio",$Promedio);
		$statement->bindParam(":FECHA_REGISTRO",$FECHA_REGISTRO
	}

	public function delete($id)

	{
		$statement=$this->db->prepare("DELETE * FROM Documento WHERE ID_ESTUDIANTE=id");
		$statement=bindParam(':id',$id);
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