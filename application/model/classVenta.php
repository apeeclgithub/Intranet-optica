<?php 

	require_once 'classDatabase.php';

	class Venta{

		private $venta;

		public function selectVenta(){

			$objConn = new Database();
			$sql = $objConn->prepare('	SELECT MAX(ven_id)
										FROM venta');
			$sql->execute();
			$this->venta = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->venta;

		}

		public function insertVenta($venId, $venFecha, $venValor, $cliId){

			$objConn = new Database();
			$sql = $objConn->prepare('	INSERT INTO venta (ven_id, ven_fecha, ven_valor_neto, ven_valor_iva, usuario_usu_id, cliente_cli_id) 
										VALUES (:venId, :venFecha, :venValor, 0, 1, :cliId)');
		
			$sql->bindParam(':venId', $venId);
			$sql->bindParam(':venFecha', $venFecha);
			$sql->bindParam(':venValor', $venValor);
			$sql->bindParam(':cliId', $cliId);

			$this->venta = $sql->execute();

			return $this->venta;

		}

		public function insertTipo($fecha, $venta){

			$objConn = new Database();
			$sql = $objConn->prepare('	INSERT INTO tipo (tip_id, tip_forma_pago, tip_fecha, venta_ven_id)
										VALUES (:venta, "Cheque", :fecha, :venta)');

			$sql->bindParam(':fecha', $fecha);
			$sql->bindParam(':venta', $venta);

			$this->venta = $sql->execute();

			return $this->venta;

		}

		public function insertProducto($cantidad, $venta, $producto){

			$objConn = new Database();
			$sql = $objConn->prepare('	INSERT INTO detalle (det_cantidad, venta_ven_id, producto_pro_id) 
										VALUES (:cantidad, :venta, :producto)');
		
			$sql->bindParam(':cantidad', $cantidad);
			$sql->bindParam(':venta', $venta);
			$sql->bindParam(':producto', $producto);

			$this->venta = $sql->execute();

			return $this->venta;

		}

		public function updateCantidad($id, $cantidad){

			$objConn = new Database();
			$sql = $objConn->prepare('	UPDATE producto 
										SET pro_stock = pro_stock - :cantidad
										WHERE pro_id = :id');
		
			$sql->bindParam(':id', $id);
			$sql->bindParam(':cantidad', $cantidad);

			$this->venta = $sql->execute();

			return $this->venta;

		} 

	}

?>