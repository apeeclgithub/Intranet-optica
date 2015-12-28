<?php 

	require '../model/selectMarca.php';

	$select = selectMarca();
	
	foreach ($select as $key => $value) {
		echo '<option value="'.$value['mar_id'].'">'.$value['mar_nombre'].'</option>';
	}

?>