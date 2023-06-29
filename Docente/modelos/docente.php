<?php 
	include_once('../../Conexion.php');
	class docente extends Conexion{

		public function __construct(){

			$this->db = parent::__construct();
		}

		public function agregarad($Nombredo,$Apellidodo,$Documentodo,$Correodo,$Materiado,$Usuariodo,$Passworddo,$Perfildo,$Estadodo){

			 $sql = "SELECT * FROM docentes WHERE Usuariodoc='$Usuariodo'";
        $result = $this->db->query($sql);
        if($result->rowCount() > 0){

        	echo "<script>
          alert('El docente ya esta registrado');
          window.location = '../pages/agregar.php';
      </script>";   

        }else{

				$statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc, Passworddoc,Perfil,Estadodoc)values(:Nombredo, :Apellidodo, :Documentodo, :Correodo, :Materiado, :Usuariodo, :Passworddo, :Perfildo, :Estadodo)");

				$statement->bindParam(":Nombredo", $Nombredo); 	
				$statement->bindParam(":Apellidodo", $Apellidodo); 	
				$statement->bindParam(":Documentodo", $Documentodo); 	
				$statement->bindParam(":Correodo", $Correodo); 	
				$statement->bindParam(":Materiado", $Materiado); 	
				$statement->bindParam(":Usuariodo", $Usuariodo);
				$statement->bindParam(":Passworddo", $Passworddo);
				$statement->bindParam(":Perfildo", $Perfildo);
				$statement->bindParam(":Estadodo", $Estadodo);
				if ($statement->execute()) {
						echo "Docente registrado registrado";
						header('Location:  ../pages/index.php');
				}else{
						echo "no se puede realizar el registro";
						header('Location: ../pages/agregar.php');
				}

			}
		}

		public function getad(){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM docentes WHERE Perfil='Docente'");
			$statement->execute();

			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}

		public function getidad($Id){
			$statement = $this->db->prepare("SELECT * FROM docentes WHERE id_docente= :Id");
			$statement->bindparam(':Id',$Id);
			$statement->execute();
			
			$resultado = $statement->fetch(PDO::FETCH_ASSOC); 
			return $resultado;
		}

		public function updatead($Id,$Nombredo,$Apellidodo,$Documentodo,$Correodo,$Materiado,$Usuariodo,$Passworddo,$Perfildo,$Estadodo){

			$statement=$this->db->prepare("UPDATE docentes SET id_docente=:Id,Nombredoc=:Nombredo,Apellidodoc=:Apellidodo,Documentodoc=:Documentodo,Correodoc=:Correodo,Materiadoc=:Materiado,Usuariodoc=:Usuariodo,Passworddoc=:Passworddo,Perfil=:Perfildo,Estadodoc=:Estadodo WHERE id_docente=$Id");

			$statement->bindParam(':Id',$Id);
			$statement->bindParam(":Nombredo", $Nombredo); 	
			$statement->bindParam(":Apellidodo", $Apellidodo); 	
			$statement->bindParam(":Documentodo", $Documentodo); 	
			$statement->bindParam(":Correodo", $Correodo); 	
			$statement->bindParam(":Materiado", $Materiado);
			$statement->bindParam(":Usuariodo", $Usuariodo);
			$statement->bindParam(":Passworddo", $Passworddo);
			$statement->bindParam(":Perfildo", $Perfildo);
			$statement->bindParam(":Estadodo", $Estadodo);

				if ($statement->execute()) {
						
						header('Location:  ../pages/index.php');
				}else{
						
						header('Location: ../pages/editar.php');
				}

		}


		public function deletead($Id){

			$statement=$this->db->prepare("DELETE * FROM docentes WHERE id_docente=$Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) {
				echo "docente eliminado";
				header('Location: ../pages/index.php');
			}else{

				echo "el docente no se puede eliminar";
				header('Location: ../pages/eliminar.php');
			}

		}
		
	}

 ?>