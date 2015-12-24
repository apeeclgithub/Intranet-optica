<?php 
//require'../model/database.php';
	require '../model/selectProductAll.php';

	$array = selectProductAll();
	
	foreach ($array as $key => $value) {
		?>
			<tr>
				<td class="mdl-data-table__cell--non-numeric"><?php echo $value['pro_codigo']; ?></td>
				<td class="mdl-data-table__cell--non-numeric"><?php echo $value['mar_nombre']; ?></td>
				<td class="mdl-data-table__cell--non-numeric"><?php echo $value['col_nombre']; ?></td>
				<td><?php echo $value['pro_stock']; ?></td>
				<td class="mdl-data-table__cell--non-numeric"><?php echo $value['pro_descripcion']; ?></td>
				<td>
					<div class="btnRight">
						<div class="interior">
							<a class="btnIcons" href="#open-modal-edit"><i class="material-icons">edit</i></a>&nbsp;&nbsp;&nbsp;
						</div>
						<div class="interior">
							<a class="btnIcons" href="#open-modal-delete"><i class="material-icons">delete</i></a>
						</div>
					</div>
				</td>
		    </tr>
		<?php
	}

?>