<?php 

	function insertProducto($proCodigo, $proStock, $proDescripcion, $proColor, $proMarca){
		
		$objConn = new Database();
		$sql = $objConn->prepare('INSERT INTO producto (pro_codigo, pro_stock, pro_descripcion, color_col_id, marca_mar_id) VALUES (:proCodigo, :proStock, :proDescripcion, :proColor, :proMarca)');
		
		$sql->bindParam(':proCodigo', $proCodigo);
		$sql->bindParam(':proStock', $proStock);
		$sql->bindParam(':proDescripcion', $proDescripcion);
		$sql->bindParam(':proColor', $proColor);
		$sql->bindParam(':proMarca', $proMarca);

		$sql->execute();
	
	}

 ?>