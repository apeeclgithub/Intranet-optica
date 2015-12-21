<?php 

	require 'database.php';

	class SelectColor{

		function selectColor(){
		
			$objConn = new Database(); 
			$sql = $objConn->prepare('SELECT col_id, col_nombre FROM color');
			
			$sql->execute();

			//return 
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			var_dump($result);
		}	

	}

	$clase = new SelectColor();
	$clase->selectColor();

?>