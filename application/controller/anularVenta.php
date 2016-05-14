<?php
	require_once '../model/classAnular.php';
	//$venta = $_POST['ventaId'];
	$venta = 1;
	$objVenta = new Anular();
	$objVenta->existeVenta($venta);
	$json['success'] = false;
				

	foreach ((array) $objVenta as $key) {
		foreach ($key as $value) {
			if($value['ven_id'] == $venta){
				$json['success'] = true;
			}
		}
    }

echo json_encode($json);

?>