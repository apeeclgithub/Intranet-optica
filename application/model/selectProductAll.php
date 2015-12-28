<?php 

	function selectProductAll(){
		
		$objConn = new Database();

		$sql = $objConn->prepare('SELECT pro_codigo, mar_nombre, col_nombre, pro_stock, pro_descripcion FROM producto INNER JOIN marca ON producto.marca_mar_id = marca.mar_id INNER JOIN color ON producto.color_col_id = color.col_id');
		$sql->execute();
		$result = $sql->fetchAll(); 

		return $result;
	
	}

?>