<?php 
	include_once('../../Conexion.php');
	class docente extends Conexion{

		public function __construct(){

			$this->db = parent::__construct();
		}

		public function agregarad($Nombredo,$Apellidodo,$Documentodo,$Correodo,$Materiado,$Notas){

				$statement = $this->db->prepare("INSERT INTO usuarios(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Notasmate)values(:Nombredo, :Apellidodo, :Documentodo, :Correodo, :Materiado, :Notas )");

				$statement->bindParam(":Nombredo", $Nombredo); 	
				$statement->bindParam(":Apellidodo", $Apellidodo); 	
				$statement->bindParam(":Documentodo", $Documentodo); 	
				$statement->bindParam(":Correodo", $Correodo); 	
				$statement->bindParam(":Materiado", $Materiado); 	
				$statement->bindParam(":Notas", $Notas);
				if ($statement->execute()) {
						echo "Docente registrado registrado";
						header('Location:  ../pages/index.php');
				}else{
						echo "no se puede realizar el registro";
						header('Location: ../pages/agregar.php');
				}


		}

		public function getad(){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'");
			$statement->execute();

			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}

		public function getidad($Id){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil=Administrador AND id_usuario=$Id");
			$statement->bindparam(':Id',$Id);
			$statement->execute();
			
			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}

		public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad){

			$statement=$this->db->prepare("UPDATE * FROM usuarios SET Nombreusu=:Nombread,Apellidousu=:Apellidoad,Usuario=:Usuarioad, Passwordusu=:Passwordad, Estado=:Estadoad WHERE id_usuario=$Id");

			$statement=bindParam(':Id',$Id);
			$statement->bindParam(":Nombread", $Nombread); 	
			$statement->bindParam(":Apellidoad", $Apellidoad); 	
			$statement->bindParam(":Usuarioad", $Usuarioad); 	
			$statement->bindParam(":Passwordad", $Passwordad); 	
			$statement->bindParam(":Perfilad", $Perfilad); 	
			$statement->bindParam(":Estadoad", $Estadoad);

				if ($statement->execute()) {
						
						header('Location:  ../pages/index.php');
				}else{
						
						header('Location: ../pages/editar.php');
				}

		}


		public function deletead($Id){

			$statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=$Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) {
				echo "usuario eliminado";
				header('Location: ../pages/index.php');
			}else{

				echo "el usuario no se puede eliminar";
				header('Location: ../pages/eliminar.php')
			}

		}
		
	}

 ?>