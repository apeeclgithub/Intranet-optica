<?php 

	require '../model/selectColor.php';

	$array = selectColor();
	foreach ($array as $key => $value) {
		echo '<option value="'.$value['col_id'].'">'.$value['col_nombre'].'</option>';
	}

?>