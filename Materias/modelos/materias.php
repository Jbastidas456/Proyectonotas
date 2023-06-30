<?php 
	include_once('../../Conexion.php');
	class materias extends Conexion{

		public function __construct(){

			$this->db = parent::__construct();
		}

		public function agregarad($Nombrema){



        $sql = "SELECT * FROM materias WHERE Nombremate='$Nombrema'";
        $result = $this->db->query($sql);
        if($result->rowCount() > 0){

        	echo "<script>
          alert('la materia ya esta registrada');
          window.location = '../pages/agregar.php';
      </script>";   

        }else{
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

			$statement = $this->db->prepare("SELECT * FROM materias WHERE id_materia= :Id");
			$statement->bindparam(':Id',$Id);
			$statement->execute();
			
			$resultado = $statement->fetch(PDO::FETCH_ASSOC); 
			return $resultado;
		}

		public function updatead($Id,$Nombread){

			$statement=$this->db->prepare("UPDATE materias SET id_materia=:Id,Nombremate=:Nombread WHERE id_materia=$Id");

			$statement->bindParam(':Id',$Id);
			$statement->bindParam(":Nombread", $Nombread); 	

				if ($statement->execute()) {
						
						header('Location:  ../pages/index.php');
				}else{
						
						header('Location: ../pages/editar.php');
				}

		}


		public function deletead($Id){

			$statement=$this->db->prepare("DELETE FROM materias WHERE id_materia=:Id");
			$statement->bindParam(':Id',$Id);
			if ($statement->execute()) {
				print "<script>alert('Materia eliminada');
				window.location='../pages/index.php';</script>";
			}else{

				print "<script>alert(' no se puede eliminar');
				window.location='../pages/eliminar.php';</script>";
			}

		}
		
	}





 ?>