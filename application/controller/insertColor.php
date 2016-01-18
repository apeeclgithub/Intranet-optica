<?php 
	
	require '../model/insertColor.php';
	require '../model/database.php';

	$colNombre = $_POST['colNombre'];

	insertColor($colNombre);

	$json['success'] = true;
    echo json_encode($json);
?>