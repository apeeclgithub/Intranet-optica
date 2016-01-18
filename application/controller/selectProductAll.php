<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
	<thead>
		<tr>
			<th class="mdl-data-table__cell--non-numeric">Código</th>
			<th class="mdl-data-table__cell--non-numeric">Marca</th>
			<th class="mdl-data-table__cell--non-numeric">Color</th>
			<th>Stock</th>
			<th class="mdl-data-table__cell--non-numeric">Descripción</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$objProducto = new Producto();
		$objProducto->selectProductAll();

		foreach ((array)$objProducto as $key) {
			foreach ($key as $key2 => $value) {
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
								<a onclick="editarProducto(
								'<?php echo $value['pro_codigo']; ?>', 
								'<?php echo $value['mar_nombre']; ?>',
								'<?php echo $value['col_nombre']; ?>',
								<?php echo $value['pro_stock']; ?>,
								'<?php echo $value['pro_descripcion']; ?>')" class="btnIcons" href="#open-modal-edit"><i class="material-icons">edit</i></a>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="interior">
								<a class="btnIcons" href="#open-modal-delete"><i class="material-icons">delete</i></a>
							</div>
						</div>
					</td>
			    </tr>
			<?php
			}
		}
	?>
	</tbody>
</table>