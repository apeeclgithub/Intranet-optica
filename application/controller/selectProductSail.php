<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#paginationProductsSail').DataTable();

		$('button').click( function() {
			var data = table.$('input').serialize();
			alert(
				"The following data would have been submitted to the server: \n\n"+
				data.substr( 0, 120 )+'...'
				);
			return false;
		} );
	} );


</script>
<div id="dataClient">
	<div class="fontItem">LISTADO DE PRODUCTOS</div>
	<table id="paginationProductsSail" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp display" cellspacing="0">
		<thead style="  cursor: pointer;">
			<tr>
				<th>Cantidad</th>
				<th class="mdl-data-table__cell--non-numeric">Código</th>
				<th class="mdl-data-table__cell--non-numeric">Marca</th>
				<th class="mdl-data-table__cell--non-numeric">Color</th>
				<th class="mdl-data-table__cell--non-numeric">Descripción</th>
				<th>P. Unitario</th>
				<th>Total</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once '../model/producto.php';
			$objProducto = new Producto();
			$objProducto->selectProductAll();

			foreach ((array)$objProducto as $key) {
				foreach ($key as $key2 => $value) {
					?>
					<tr>
						<td><input type="text" id="row-1-cant" name="row-1-cant" value=""></td>
						<td class="mdl-data-table__cell--non-numeric"><?php echo $value['pro_codigo']; ?></td>
						<td class="mdl-data-table__cell--non-numeric"><?php echo $value['mar_nombre']; ?></td>
						<td class="mdl-data-table__cell--non-numeric"><?php echo $value['col_nombre']; ?></td>
						<td class="mdl-data-table__cell--non-numeric"><?php echo $value['pro_descripcion']; ?></td>
						<td><input type="text" id="row-1-price" name="row-1-price" value=""></td>
						<td><input type="text" id="row-1-total" name="row-1-total" value=""></td>
						<td></td>
					</tr>
					<?php
				}
			}
			?>
		</tbody>
	</table>
</div>