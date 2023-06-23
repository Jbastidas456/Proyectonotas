<?php 
	include_once('../../Conexion.php');
	class materias extends Conexion{

		public function __construct(){

			$this->db = parent::__construct();
		}

		public function agregarad($Nombrema){

			$statement = $this->db->prepare("INSERT INTO materias(Nombremate)values(:Nombrema)");

				$statement->bindParam(":Nombrema", $Nombrema); 	
			
				if ($statement->execute()) {
						echo "materia registrada";
						header('Location:  ../pages/index.php');
				}else{
						echo "no se puede realizar el registro";
						header('Location: ../pages/agregar.php');
				}


		}

		public function getad(){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM materias");
			$statement->execute();

			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}

		public function getidad($Id){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM materias WHERE id_materia=$Id");
			$statement->bindparam(':Id',$Id);
			$statement->execute();
			
			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}

		public function updatead($Id,$Nombrema){

			$statement=$this->db->prepare("UPDATE * FROM materias SET Nombremate=:Nombrema WHERE id_materia=$Id");

			$statement=bindParam(':Id',$Id);
			$statement->bindParam(":Nombrema", $Nombrema); 	
			

				if ($statement->execute()) {
						
						header('Location:  ../pages/index.php');
				}else{
						
						header('Location: ../pages/editar.php');
				}

		}


		public function deletead($Id){

			$statement=$this->db->prepare("DELETE * FROM materias WHERE id_materia=$Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) {
				echo "materia eliminada";
				header('Location: ../pages/index.php');
			}else{

				echo "no se puede eliminar";
				header('Location: ../pages/eliminar.php');
			}

		}
		
	}





 ?>