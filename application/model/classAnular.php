<?php 
	require_once 'classDatabase.php';

	class Anular{

		private $anular;

		public function existeVenta($id){

			$objConn = new Database();
			$sql = $objConn->prepare('SELECT ven_id FROM venta WHERE ven_id = :id');
			$sql->bindParam(':id', $id);
			$sql->execute();
			$this->anular = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->anular;

		}

		public function borrarVenta($id){

			$objConn = new Database();
			$sql = $objConn->prepare('DELETE FROM venta WHERE ven_id = :id');
			$sql->bindParam(':id', $id);
			$sql->execute();
			$this->anular = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->anular;

		}

		public function borrarDetalle($id){

			$objConn = new Database();
			$sql = $objConn->prepare('DELETE FROM venta WHERE ven_id = :id');
			$sql->bindParam(':id', $id);
			$sql->execute();
			$this->anular = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->anular;

		}

	}

	$objAnular = new Anular();
	$objAnular->existeVenta(1);
	var_dump($objAnular);

 ?>