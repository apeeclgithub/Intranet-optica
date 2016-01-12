<?php 
	
	require '../model/insertProduct.php';

	$proCodigo = $_POST['proCodigo'];
	$proMarca = $_POST['proMarca'];
	$proColor = $_POST['proColor'];
	$proStock = $_POST['proStock'];
	$proDesc = $_POST['proDesc'];

	insertProducto($proCodigo, $proMarca, $proColor, $proStock, $proDesc);

?>