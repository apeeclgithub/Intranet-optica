<?php 
	
	function insertColor($colNombre){

		$objConn = new Database(); 
		$sql = $objConn->prepare('INSERT INTO color (col_nombre) VALUES (:colNombre)');

		$sql->bindParam(':colNombre', $colNombre);

		$sql->execute();

	}

?>