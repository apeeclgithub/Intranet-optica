<?php 
	
	function insertMarca($marNombre){

		$objConn = new Database(); 
		$sql = $objConn->prepare('INSERT INTO marca (mar_nombre) VALUES (:marNombre)');

		$sql->bindParam(':marNombre', $marNombre);

		$sql->execute();

	}

?>