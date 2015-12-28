<?php 
	
	require '../model/insertMarca.php';
	require '../model/database.php';

	$marNombre = $_POST['marNombre'];

	insertMarca($marNombre);

	$json['success'] = true;
    echo json_encode($json);

?>