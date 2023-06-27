<?php 
	include_once('../../Conexion.php');
	class Administrador extends Conexion{

		public function __construct(){

			$this->db = parent::__construct();
		}

		public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad){

		
        $sql = "SELECT * FROM usuarios WHERE Usuario='$Usuarioad'";
        $result = $this->db->query($sql);
        if($result->rowCount() > 0){

        	echo "<script>
          alert('El usuario ya esta registrado');
          window.location = '../pages/agregar.php';
      </script>";   

        }else{

			$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread, :Apellidoad, :Usuarioad, :Passwordad, :Perfilad, :Estadoad )");

				$statement->bindParam(":Nombread", $Nombread); 	
				$statement->bindParam(":Apellidoad", $Apellidoad); 	
				$statement->bindParam(":Usuarioad", $Usuarioad); 	
				$statement->bindParam(":Passwordad", $Passwordad); 	
				$statement->bindParam(":Perfilad", $Perfilad); 	
				$statement->bindParam(":Estadoad", $Estadoad);
				if ($statement->execute()) {
						echo "usuario registrado";
						header('Location:  ../pages/index.php');
				}else{
						echo "no se puede realizar el registro";
						header('Location: ../pages/agregar.php');
				}
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
			
			$statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario= :Id");
			$statement->bindparam(':Id',$Id);
			$statement->execute();
			
			$resultado = $statement->fetch(PDO::FETCH_ASSOC); 
			return $resultado;
		}

		public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad){

			$statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id,Nombreusu=:Nombread,Apellidousu=:Apellidoad,Usuario=:Usuarioad,Passwordusu=:Passwordad,Perfil=:Perfilad,Estado=:Estadoad WHERE id_usuario=$Id");

			$statement->bindParam(':Id',$Id);
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
				header('Location: ../pages/eliminar.php');
			}

		}
		
	}





 ?>