<?php 

	require '../model/Producto.php';

	$proCodigo = $_POST['proCodigo'];
	$proMarca = $_POST['proMarca'];
	$proColor = $_POST['proColor'];
	$proStock = $_POST['proStock'];

	$objProducto = new Producto();
	$json['success'] = false;
	$json['success'] = $objProducto->updateProduct($proCodigo, $proMarca, $proColor, $proStock);
    echo json_encode($json);

?>