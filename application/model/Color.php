<?php 
	require 'Database.php';
	class Color{

		private $id;
		private $nombre;

		public function listColor(){

			$objConn = new Database();
			$sql = $objConn->prepare('SELECT col_id, col_nombre FROM color');
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $result;
			//var_dump($result);
		}

	}

	$objColor = new Color();
	//$objColor->listColor();
	//echo count($objColor);
	var_dump((array)$objColor);
	//print_r($objColor);
	/*foreach ($objColor as $key => $value) {
		echo $value['color']['id'].' - '.$value['nombre'].'<br>';
	}*/
 ?>