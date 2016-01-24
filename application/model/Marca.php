<?php 

	require_once '../model/database.php';
	
	class Marca{

		private $marca;
		
		public function listMarca(){

			$objConn = new Database();
			$sql = $objConn->prepare('SELECT mar_id, mar_nombre FROM marca');
			$sql->execute();
			$this->marca = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->marca;

		}

		public function insertMarca($colMarca){

			$objConn = new Database();

			$sql = $objConn->prepare('INSERT INTO marca (mar_nombre) VALUES (:colMarca)');
			$sql->bindParam(':colMarca', $colMarca);

			$this->marca = $sql->execute();

			return $this->marca;

		}

	}

?>