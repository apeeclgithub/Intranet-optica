<?php 

	require_once 'Database.php';

	class Producto{

		private $producto;

		public function selectProductAll(){
			
			$objConn = new Database();
			$sql = $objConn->prepare('	SELECT pro_codigo, mar_nombre, col_nombre, pro_stock, pro_descripcion 
										FROM producto 
										INNER JOIN marca ON producto.marca_mar_id = marca.mar_id 
										INNER JOIN color ON producto.color_col_id = color.col_id');
			$sql->execute();
			$this->producto = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $this->producto;

		}

		public function insertProduct($proCodigo, $proMarca, $proColor, $proStock, $proDesc){
			
			$objConn = new Database();
			$sql = $objConn->prepare('	INSERT INTO producto (pro_codigo,marca_mar_id, color_col_id, pro_stock, pro_descripcion) 
										VALUES (:proCodigo, :proMarca, :proColor, :proStock, :proDesc)');
		
			$sql->bindParam(':proCodigo', $proCodigo);
			$sql->bindParam(':proMarca', $proMarca);
			$sql->bindParam(':proColor', $proColor);
			$sql->bindParam(':proStock', $proStock);
			$sql->bindParam(':proDesc', $proDesc);

			$this->producto = $sql->execute();

			return $this->producto;

		}

		public function updateProduct($proCodigo, $proMarca, $proColor, $proStock){

			$objConn = new Database();
			$sql = $objConn->prepare();

			$sql->bindParam(':proCodigo', $proCodigo);
			$sql->bindParam(':proMarca', $proMarca);
			$sql->bindParam(':proColor', $proColor);
			$sql->bindParam(':proStock', $proStock);

			$this->producto = $sql->execute();

			return $this->producto;

		}

	}

?>