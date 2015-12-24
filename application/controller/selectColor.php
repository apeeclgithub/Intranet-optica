<?php 

	require '../model/selectColor.php';

	$select = selectColor();

	foreach ($select as $key => $value) {
		echo '<option value="'.$value['col_id'].'">'.$value['col_nombre'].'</option>';
	}

?>