<?php 

	function selectColor(){
		
		//require 'database.php';
		$objConn = new Database();

		$sql = $objConn->prepare('SELECT col_id, col_nombre FROM color');
		$sql->execute();
		$result = $sql->fetchAll(); 

		return $result;
	
	}

?>