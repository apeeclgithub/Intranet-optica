<?php 
	require_once '../model/Database.php';
	class Marca{

		private $marca;

		public function listMarca(){

			$objConn = new Database();
			$sql = $objConn->prepare('SELECT mar_id, mar_nombre FROM marca');
			$sql->execute();
			$this->marca = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->marca;

		}

	}

?>