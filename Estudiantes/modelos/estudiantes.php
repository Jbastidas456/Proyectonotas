<?php 
	include_once('../../Conexion.php');
	class estudiantes extends Conexion{

		public function __construct(){

			$this->db = parent::__construct();
		}

		public function agregarad($Nombrees,$Apellidoes,$Docues,$Correoes,$Materiaes,$Docentees,$Promedioes,$Fecha_registroes){

			$statement = $this->db->prepare("INSERT INTO estudiantes(Nombreestu,Apellidoestu,Docuestu,Correoest,Materiaestu,Docente,Promedioestu,Fecha_registro)values(:Nombrees, :Apellidoes, :Docues, :Correoes, :Materiaes, :Docentees, :Promedioes, :Fecha_registroes )");

				$statement->bindParam(":Nombrees", $Nombrees); 	
				$statement->bindParam(":Apellidoes", $Apellidoes); 	
				$statement->bindParam(":Docues", $Docues); 	
				$statement->bindParam(":Correoes", $Correoes); 	
				$statement->bindParam(":Materiaes", $Materiaes); 	
				$statement->bindParam(":Docentees", $Docentees);
				$statement->bindParam(":Promedioes", $Promedioes);
				$statement->bindParam(":Fecha_registroes", $Fecha_registroes);
				if ($statement->execute()) {
						echo "usuario registrado";
						header('Location:  ../pages/index.php');
				}else{
						echo "no se puede realizar el registro";
						header('Location: ../pages/agregar.php');
				}
			}


		public function getad(){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM estudiantes");
			$statement->execute();

			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}

		public function getidad($Id){
			
			$statement = $this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante= :Id");
			$statement->bindparam(':Id',$Id);
			$statement->execute();
			
			$resultado = $statement->fetch(PDO::FETCH_ASSOC); 
			return $resultado;
		}

		public function updatead($Id,$Nombrees,$Apellidoes,$Docues,$Correoes,$Materiaes,$Docentees,$Promedioes,$Fecha_registroes){

			$statement=$this->db->prepare("UPDATE estudiantes SET id_estudiante=:Id,Nombreestu=:Nombrees,Apellidoestu=:Apellidoes,Docuestu=:Docues,Correoest=:Correoes,Materiaestu=:Materiaes,Docente=:Docentees , Promedioestu=:Promedioes, Fecha_registro=:Fecha_registroes WHERE id_estudiante=$Id");

			$statement->bindParam(":Nombrees", $Nombrees); 	
			$statement->bindParam(":Apellidoes", $Apellidoes); 	
			$statement->bindParam(":Docues", $Docues); 	
			$statement->bindParam(":Correoes", $Correoes); 	
			$statement->bindParam(":Materiaes", $Materiaes); 	
			$statement->bindParam(":Docentees", $Docentees);
			$statement->bindParam(":Promedioes", $Promedioes);
			$statement->bindParam(":Fecha_registroes", $Fecha_registroes);

				if ($statement->execute()) {
						
						header('Location:  ../pages/index.php');
				}else{
						
						header('Location: ../pages/editar.php');
				}

		}


		public function deletead($Id){
				$statement=$this->db->prepare("DELETE FROM estudiantes WHERE id_estudiante=:Id");
				$statement->bindParam(':Id', $Id);
				if($statement->execute()){
				print "<script>alert('estudiante eliminado');
				window.location='../pages/index.php';</script>";
			}else{

					print "<script>alert('estudiante no se puede eliminar');
				window.location='../pages/eliminar.php';</script>";
			}

		}
		
	}





 ?>