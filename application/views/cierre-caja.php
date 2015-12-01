<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<div>Cierre de caja</div>
	<div>Fecha:</div>
	<div>Hora</div>
	<div style="border:1px solid black;">
		
		<div>
			<div>Sistema</div>
			<label for="close_cash_label" >
				<span>Efectivo</span>
				<input id="input_close_cash" type="text" required/>
			</label>
			<label for="close_card_label" >
				<span>Tarjeta Crédito</span>
				<input id="input_close_card" type="text" required/>
			</label>
			<label for="close_doc_label" >
				<span>Cheque</span>
				<input id="input_close_doc" type="text" required/>
			</label>
			<label for="close_total_label" >
				<span>Total</span>
				<input id="input_close_total" type="text" required/>
			</label>
		</div>
		<div>
			<div>Real</div>
			<label for="close_cash_label_real" >
				<span>Efectivo</span>
				<input id="input_close_cash_real" type="text" required/>
			</label>
			<label for="close_card_label_real" >
				<span>Tarjeta Crédito</span>
				<input id="input_close_card_real" type="text" required/>
			</label>
			<label for="close_doc_label_real" >
				<span>Cheque</span>
				<input id="input_close_doc_real" type="text" required/>
			</label>
			<label for="close_total_label_real" >
				<span>Total</span>
				<input id="input_close_total_real" type="text" required/>
			</label>
		</div>
		<div>
			<label for="close_dif_label" >
				<span>Diferencia</span>
				<input id="input_close_dif" type="text" required/>
			</label>
			<label for="close_pending_label" >
				<span>Saldo Pendiente</span>
				<input id="input_close_pending" type="text" required/>
			</label>
			<button>Resumen venta diaría</button>
			<button>Cerrar Caja</button>
		</div>
		<div>
			<div>Detalle de venta</div>
			<table border="1">
				<tr>
					<td>N° Venta</td>
					<td>Cod. Producto</td>
					<td>Descripción</td>
					<td>Precio Unitario</td>
					<td>Cantidad</td>
					<td>Forma Pago</td>
					<td>Total Venta</td>
				</tr>
					<tr>
					<td>N° Venta1</td>
					<td>Cod. Producto1</td>
					<td>Descripción1</td>
					<td>Precio Unitario1</td>
					<td>Cantidad1</td>
					<td>Forma Pago1</td>
					<td>Total Venta1</td>
				</tr>
				<tr>
					<td>N° Venta2</td>
					<td>Cod. Producto2</td>
					<td>Descripción2</td>
					<td>Precio Unitario2</td>
					<td>Cantidad2</td>
					<td>Forma Pago2</td>
					<td>Total Venta2</td>
				</tr>
				<tr>
					<td>Total</td>
				</tr>
			</table>
		</div>
	</div>

</div>
<?php include('footer.php') ?>