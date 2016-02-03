<?php 
	
	require_once 'classDatabase.php';

	class Cheque{

		private $cheque;

		public function listCheque($cliId){

			$objConn = new Database();
			$sql = $objConn->prepare('	SELECT che_numero, che_banco, che_fecha, che_monto 
										FROM cheque
										INNER JOIN tipo ON tipo.tip_forma_pago = "Cheque"
										INNER JOIN venta ON tipo.venta_ven_id = venta.ven_id
										WHERE cliente_cli_id = :cliId');

			$sql->bindParam(':cliId', $cliId);
			$this->cheque = $sql->execute();
			$this->cheque = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->cheque;
		}

	}

?>