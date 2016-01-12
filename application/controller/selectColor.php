<?php 

	require '../model/selectColor.php';

	/*$color = new SelectColor();
	$color->selectColor();*/

	$color = selectColor();

	foreach ($color as $key => $value) {
		echo '<option value="'.$value['col_id'].'">'.$value['col_nombre'].'</option>';
	}

?>