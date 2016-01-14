<?php require '../model/Color.php'; ?>

	<div class="mdl-selectfield">
		<label>Color</label>
		<select class="browser-default" id="productColor">
			<option value="" disabled selected>Color</option>
			<?php 

				$objColor = new Color();
				$objColor->listColor();

				foreach ((array)$objColor as $key) {
					foreach ($key as $key2 => $value) {
						echo '<option value="'.$value['col_id'].'">'.$value['col_nombre'].'</option>';
					}
				}
			?>
		</select>
	</div>

<?php 
/*
	require '../model/selectColor.php';
	

	$color = new SelectColor();
	$color->selectColor();

	$color = selectColor();

	foreach ($color as $key => $value) {
		echo '<option value="'.$value['col_id'].'">'.$value['col_nombre'].'</option>';
	}


	
	var_dump($objColor);
	//echo count($objColor);
	//var_dump((array)$objColor);
	//print_r($objColor);*/
	
?>