<?php 

	require '../model/producto.php';

	$proId    = $_POST['proId'];
	$proCodigo = $_POST['proCodigo'];
	$proMarca = $_POST['proMarca'];
	$proColor = $_POST['proColor'];
	$proStock = $_POST['proStock'];

	$objProducto = new Producto();
	$json['success'] = false;
	$json['success'] = $objProducto->updateProduct($proId, $proCodigo, $proMarca, $proColor, $proStock);
    echo json_encode($json);

?>