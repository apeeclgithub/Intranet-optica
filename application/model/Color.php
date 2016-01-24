<?php 
	require_once '../model/database.php';
	class Color{

		private $color;

		public function listColor(){

			$objConn = new Database();
			$sql = $objConn->prepare('SELECT col_id, col_nombre FROM color');
			$sql->execute();
			$this->color = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->color;

		}

		public function insertColor($colNombre){

			$objConn = new Database();
			$sql = $objConn->prepare('INSERT INTO color (col_nombre) VALUES (:colNombre)');
			$sql->bindParam(':colNombre', $colNombre);

			$this->color = $sql->execute();

			return $this->color;

		}

	}

 ?>