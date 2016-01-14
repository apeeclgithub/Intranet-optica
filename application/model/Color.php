<?php 

	class Color{

		private $color;

		public function listColor(){

			$objConn = new Database();
			$sql = $objConn->prepare('SELECT col_id, col_nombre FROM color');
			$sql->execute();
			$this->color = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->color;

		}

	}

 ?>