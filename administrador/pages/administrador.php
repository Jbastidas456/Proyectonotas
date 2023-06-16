<?php

include_once('../../Conexion');
Class Administrador extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}

	publi function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Pefilad,$Estadoad)
	{
		$statement=$this->db->prepare("INSERT INTO usuarios(Nombre,Apellido,Usuario,Password,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Pefilad,:Estadoad)");

		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Usuarioad",$Usuarioad);
		$statement->bindParam(":Passwordad",$Passwordad);
		$statement->bindParam(":Pefilad",$Pefilad);
		$statement->bindParam(":Estadoad",$Estadoad);

		if ($statement->execute()) {
			echo "usuario registrado";

		}else{
			echo "no se puede crear el registro";
		}

	}


}
?>