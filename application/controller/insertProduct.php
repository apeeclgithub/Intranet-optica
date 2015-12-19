<?php 
	
	require '../model/insertProduct.php';

	$proCodigo = $_POST[''];
	$proStock = $_POST[''];
	$proDescripcion = $_POST[''];
	$proColor = $_POST[''];
	$proMarca = $_POST[''];

	insertProducto($proCodigo, $proStock, $proDescripcion, $proColor, $proMarca);

?>