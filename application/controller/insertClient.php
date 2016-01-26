<?php 
	
	require '../model/classCliente.php';

	$clientName 	= $_POST['clientName'];
	$clientRut 		= $_POST['clientRut'];
	$clientPhone 	= $_POST['clientPhone'];
	$clientGir		= $_POST['clientGir'];
	$clientAddress	= $_POST['clientAddress'];

	$objClient = new Cliente();
	$json['success'] = false;
	$json['success'] = $objClient->insertClient($clientName, $clientRut, $clientPhone, $clientGir, $clientAddress);

    echo json_encode($json);

?>