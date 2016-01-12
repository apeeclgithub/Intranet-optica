<?php 
	
	function insertClient($clientName, $clientRut, $clientPhone, $clientGir, $clientAddress){

		$objConn = new Database(); 
		$sql = $objConn->prepare('INSERT INTO cliente (cli_nombre, cli_rut, cli_fono, cli_giro, cli_direccion) VALUES (:clientName, :clientRut, :clientPhone, :clientGir, :clientAddress)');

		$sql->bindParam(':clientName', $clientName);
		$sql->bindParam(':clientRut', $clientRut);
		$sql->bindParam(':clientPhone', $clientPhone);
		$sql->bindParam(':clientGir', $clientGir);
		$sql->bindParam(':clientAddress', $clientAddress);

		$sql->execute();

	}

?>