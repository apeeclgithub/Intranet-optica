<?php 

	require_once 'classDatabase.php';

	class Cliente{

		private $cliente;

		public function selectClientAll(){
			
			$objConn = new Database();
			$sql = $objConn->prepare('	SELECT cli_id, cli_nombre, cli_rut, cli_fono, cli_giro, cli_direccion
										FROM cliente');
			$sql->execute();
			$this->cliente = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->cliente;

		}

		public function insertClient($clientName, $clientRut, $clientPhone, $clientGir, $clientAddress){
			
			$objConn = new Database();
			$sql = $objConn->prepare('INSERT INTO cliente (cli_nombre, cli_rut, cli_fono, cli_giro, cli_direccion) VALUES (:clientName, :clientRut, :clientPhone, :clientGir, :clientAddress)');
		
			$sql->bindParam(':clientName', $clientName);
			$sql->bindParam(':clientRut', $clientRut);
			$sql->bindParam(':clientPhone', $clientPhone);
			$sql->bindParam(':clientGir', $clientGir);
			$sql->bindParam(':clientAddress', $clientAddress);

			$this->cliente = $sql->execute();

			return $this->cliente;

		}

		public function updateClient($cliId, $clientName, $clientRut, $clientPhone, $clientGir, $clientAddress){

			$objConn = new Database();
			$sql = $objConn->prepare("	UPDATE `cliente` 
										SET `cli_rut` = :clientRut, `cli_nombre` = :clientName, `cli_fono` = :clientPhone, `cli_direccion` = :clientAddress, `cli_giro` = :clientGir 
										WHERE `cli_id` = :cliId");

			$sql->bindParam(':cliId', $cliId);
			$sql->bindParam(':clientName', $clientName);
			$sql->bindParam(':clientRut', $clientRut);
			$sql->bindParam(':clientPhone', $clientPhone);
			$sql->bindParam(':clientGir', $clientGir);
			$sql->bindParam(':clientAddress', $clientAddress);

			$this->cliente = $sql->execute();

			return $this->cliente;

		}

		public function deleteClient($cliId){

			$objConn = new Database();
			$sql = $objConn->prepare('	DELETE FROM cliente WHERE cli_id = :cliId');

			$sql->bindParam(':cliId', $cliId);

			$this->cliente = $sql->execute();

			return $this->cliente;
		}

	}

?>