<?php 

	include_once('Conexion.php');


	class Consulta extends Conexion{

		public function __construct(){
			$this->db=parent::__construct();
		}

		public function getmaterias(){

			$row=null;
			$sta = $this->db->prepare("SELECT * FROM materias");
			$sta->execute();
			while($res = $sta->fetch()){
				$row[]=$res;
			}
			return $row;
		}

		public function getdocentes(){
			$row = null;
			$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil='docentes'");
			$statement->execute();

			while ($resul = $statement->fetch()) {
				
				$row[]=$resul;
			}
			return $row;
		}
	}


 ?>