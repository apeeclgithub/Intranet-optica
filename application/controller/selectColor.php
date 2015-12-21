<?php 

	require '../model/selectColor.php';

	$clase = new SelectColor();
	$clase->selectColor();
	
	print_r($clase);
	/*foreach ($clase as $key => $value) {
		echo $value['col_id'].' - '.$value['col_nombre'].'<br>';
	}*/

?>