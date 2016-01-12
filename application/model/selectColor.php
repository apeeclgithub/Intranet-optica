<?php 

	//class SelectColor{
		

		function selectColor(){
			require_once 'Database.php';
			$objConn = new Database(); 
			$sql = $objConn->prepare('SELECT col_id, col_nombre FROM color');
			
			$sql->execute();

			return $result = $sql->fetchAll();

		}

	//}

?>