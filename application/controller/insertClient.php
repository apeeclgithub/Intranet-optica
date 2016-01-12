<?php 
	
	require '../model/insertClient.php';
	require '../model/database.php';

	$clientName 	= $_POST['clientName'];
	$clientRut 		= $_POST['clientRut'];
	$clientPhone 	= $_POST['clientPhone'];
	$clientGir		= $_POST['clientGir'];
	$clientAddress	= $_POST['clientAddress'];


	insertClient($clientName, $clientRut, $clientPhone, $clientGir, $clientAddress);

	$json['success'] = true;
    echo json_encode($json);

?>