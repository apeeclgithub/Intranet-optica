<?php 
	
	require '../model/Color.php';
	require '../model/Database.php';

	$colNombre = $_POST['colNombre'];

	$objColor = new Color();
	$json['success'] = false;
	$json['success'] = $objColor->insertColor($colNombre);

    echo json_encode($json);

?>