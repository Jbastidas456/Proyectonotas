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




		$sql1 = "SELECT * FROM usuarios WHERE Usuario='Usuarioad'";
		$resultado=$this->db->query($sql1); 
		if($resultado->rowCount() > 0){
			echo "<script>
			alert('El usuario ya esta registrado');window.location='../pages/agregar.php';</script>";


		}else
		{

		$statement= $this->db->prepare("INSERT INTO usuarios(Nombre,Apellido,Usuario,Password,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Pefilad,:Estadoad)");

		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Pefilad',$Pefilad);
		$statement->bindParam(':Estadoad',$Estadoad);

		if ($statement->execute()) {
			echo "usuario registrado";
			header('Location: ../pages/index.php');

		}else{
			echo "no se puede crear el registro";
			header('Location: ../pages/agregar.php');
		}

	}
}

	public function getad()
	{
		/*$row = null;
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'"); 
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;*/

		$sql="SELECT * FROM usuarios WHERE Perfil='administrador'";
		$resultado=$this->db->query($sql);
		if ($resultado->rowCount()>0) {
			while ($resul=$resultado->fetch()) {
				$result[]=$resul;
			}
		}
		return $result;
	}

	public function getidad($Id)
	{
		
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil= ID_USUARIO=:Id"); 
		$statement->bindParam(':Id',$Id); 
		$statement->execute();
		
			$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		return $resultado;

	}
	public function updatead($id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad)
	{
		$statement=$this->db->prepare("UPDATE usuario SET Nombre=:Nombread,Apellido= :Apellidoad,Usuario= :Usuarioad,Password= :Passwordad,Estado= :Estadoad WHERE ID_USUARIO = $id");

		$statement->bindParam(':id',$id); 
		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Usuarioad",$Usuarioad);
		$statement->bindParam(":Passwordad",$Passwordad);
		$statement->bindParam(":Pefilad",$Pefilad);
		$statement->bindParam(":Estadoad",$Estadoad); 
		if ($statement->execute()) {
			echo "Usuario registrado";
			header('location: ../pages/index.php');

		}else{
			echo "Usuario  no registrado";
			header('location: ../pages/agregar.php');

		}
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