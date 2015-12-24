<?php 

	function selectMarca(){
		
		//require 'database.php';
		$objConn = new Database();

		$sql = $objConn->prepare('SELECT mar_id, mar_nombre FROM marca');
		$sql->execute();
		$result = $sql->fetchAll(); 

		return $result;
	
	}

?>