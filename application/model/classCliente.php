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

		public function updateClient($cliId, $cliNombre, $cliRut, $cliFono, $cliGiro, $cliDireccion){

			$objConn = new Database();
			$sql = $objConn->prepare('	UPDATE cliente 
										SET cli_nombre = :cliNombre, cli_rut = :cliRut, cli_fono = :cliFono, cli_giro = :cliGiro, cli_direccion = :cliDireccion
										WHERE cli_id = :cliId');

			$sql->bindParam(':cliId', $cliId);
			$sql->bindParam(':cliNombre', $cliNombre);
			$sql->bindParam(':cliRut', $cliRut);
			$sql->bindParam(':cliFono', $cliFono);
			$sql->bindParam(':cliGiro', $cliGiro);
			$sql->bindParam(':cliDireccion', $cliDireccion);

			$this->cliente = $sql->execute();

			return $this->cliente;

		}

		public function deleteProduct($proId){

			$objConn = new Database();
			$sql = $objConn->prepare('	DELETE FROM producto WHERE pro_id = :proId');

			$sql->bindParam(':proId', $proId);

			$this->producto = $sql->execute();

			return $this->producto;
		}

	}

?>