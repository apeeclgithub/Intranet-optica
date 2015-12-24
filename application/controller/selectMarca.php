<?php 

	require '../model/selectMarca.php';

	$array = selectMarca();
	
	foreach ($array as $key => $value) {
		echo '<option value="'.$value['mar_id'].'">'.$value['mar_nombre'].'</option>';
	}

?>