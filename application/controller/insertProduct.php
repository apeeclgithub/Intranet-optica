<?php 
	
	require '../model/insertProduct.php';

	$proCodigo = $_POST['proCodigo'];
	$proMarca = $_POST['proMarca'];
	$proColor = $_POST['proColor'];
	$proStock = $_POST['proStock'];
	$proDesc = $_POST['proDesc'];
//	$json['success'] = true;

//	if($proCodigo == ''){
//		$json['success'] = false;
//	}

	  	insertProducto($proCodigo, $proMarca, $proColor, $proStock, $proDesc);
	 	$json['success'] = true;
    	echo json_encode($json);
//	echo json_encode($json);
?>