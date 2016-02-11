<?php 
	
	require_once 'classDatabase.php';

	class Cheque{

		private $cheque;

		public function listCheque($cliId){

			$objConn = new Database();
			$sql = $objConn->prepare('	SELECT che_numero, che_banco, che_fecha, che_monto 
										FROM cheque 
										INNER JOIN tipo ON tipo.tip_id = cheque.tipo_tip_id
										INNER JOIN venta ON tipo.venta_ven_id = venta.ven_id
										WHERE venta.cliente_cli_id = :cliId');

			$sql->bindParam(':cliId', $cliId);
			$this->cheque = $sql->execute();
			$this->cheque = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->cheque;

		}

		public function insertCheque($numero, $banco, $fecha, $titula, $monto, $venta){

			$objConn = new Database();
			$sql = $objConn->prepare('	INSERT INTO cheque (che_numero, che_banco, che_fecha, che_titular, che_monto, tipo_tip_id) 
										VALUES (:numero, :banco, :fecha, :titula, :monto, :venta)');
		
			$sql->bindParam(':numero', $numero);
			$sql->bindParam(':banco', $banco);
			$sql->bindParam(':fecha', $fecha);
			$sql->bindParam(':titula', $titula);
			$sql->bindParam(':monto', $monto);
			$sql->bindParam(':venta', $venta);

			$this->cheque = $sql->execute();

			return $this->cheque;

		}
        
        public function selectTotalCheque($fecha){
            
            $objConn = new Database();
			$sql = $objConn->prepare('	SELECT SUM(che_monto)
                                        FROM cheque
                                        INNER JOIN tipo ON cheque.tipo_tip_id = tipo.tip_id
                                        WHERE tip_fecha = :fecha');
            
            $sql->bindParam(':fecha', $fecha);
            
			$sql->execute();
			$this->cheque = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->cheque;
            
        }

	}

?>