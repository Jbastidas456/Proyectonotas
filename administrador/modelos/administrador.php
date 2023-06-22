<?php

include_once('../../Conexion.php');
Class Administrador extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}

	public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Pefilad,$Estadoad)
	{
		$statement=$this->db->prepare("INSERT INTO usuarios(Nombre,Apellido,Usuario,Password,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Pefilad',$Pefilad);
		$statement->bindParam(':Estadoad',$Estadoad);

		if ($statement->execute()) {
			echo "usuario registrado";
			header('location: ../pages/index.php');

		}else{
			echo "no se puede crear el registro";
			header('location: ../pages/agregar.php');
		}

	}

	public function getad()
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Adiministrador'"); 
		$statement->execute();
		while ($resul=$statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;
	}

	public function getidad($id)
	{
		$row=null;
		$statement=$this-->db->prepare("SELECT * FROM usuarios WHERE Perfil='Adiministrador'and ID_USUARIO=$id"); 
		$statement->bindParam(':id',$id); 
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;

	}
	public function updatead($id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad)
	{
		$statement=$this->db->prepare("UPDATE usuario SET Nombre=:Nombread,Apellido=:Apellidoad,Usuario=:Usuarioad,Password=:Passwordad,Estado=:Estadoad WHERE ID_USUARIO=$id");

		$statement->bindParam(':id',$id); 
		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Usuarioad",$Usuarioad);
		$statement->bindParam(":Passwordad",$Passwordad);
		$statement->bindParam(":Pefilad",$Pefilad);
		$statement->bindParam(":Estadoad",$Estadoad);
	}

	public function delete($id)

	{
		$statement=$this->db->prepare("DELETE * FROM usuarios WHERE ID_USUARIO=id");
		$statement=bindParam(':id',$id);
		if($statement->execute())
		{
			echo "usuario eliminado";
			header('location: ../pages/index.php');
		}else{
			echo "el usuario no se puede eliminar";
			header('location: ../pages/eliminar.php');
		}
	}

}
?>