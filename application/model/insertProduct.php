<?php 

	function insertProducto($proCodigo, $proMarca, $proColor, $proStock, $proDesc){
		require_once 'Database.php';
		$objConn = new Database();
		$sql = $objConn->prepare('INSERT INTO producto (pro_codigo,marca_mar_id, color_col_id, pro_stock, pro_descripcion) VALUES (:proCodigo, :proMarca, :proColor, :proStock, :proDesc)');
		
		$sql->bindParam(':proCodigo', $proCodigo);
		$sql->bindParam(':proMarca', $proMarca);
		$sql->bindParam(':proColor', $proColor);
		$sql->bindParam(':proStock', $proStock);
		$sql->bindParam(':proDesc', $proDesc);

		$sql->execute();
	
	}

 ?>