<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<div>Cierre de caja</div>
	<div>Fecha:</div>
	<div>Hora</div>
	<div style="border:1px solid black;">
		
		<div>
			<div>Sistema</div>
			<label for="closeCashLabel" >
				<span>Efectivo</span>
				<input id="inputCloseCash" type="text" required/>
			</label>
			<label for="closeCardLabel" >
				<span>Tarjeta Crédito</span>
				<input id="inputCloseCard" type="text" required/>
			</label>
			<label for="closeDocLabel" >
				<span>Cheque</span>
				<input id="inputCloseDoc" type="text" required/>
			</label>
			<label for="closeTotalLabel" >
				<span>Total</span>
				<input id="inputCloseTotal" type="text" required/>
			</label>
		</div>
		<div>
			<div>Real</div>
			<label for="closeCashLabelReal" >
				<span>Efectivo</span>
				<input id="inputCloseCashReal" type="text" required/>
			</label>
			<label for="closeCardLabelReal" >
				<span>Tarjeta Crédito</span>
				<input id="inputCloseCardReal" type="text" required/>
			</label>
			<label for="closeDocLabelReal" >
				<span>Cheque</span>
				<input id="inputCloseDocReal" type="text" required/>
			</label>
			<label for="closeTotalLabelReal" >
				<span>Total</span>
				<input id="inputCloseTotalReal" type="text" required/>
			</label>
		</div>
		<div>
			<label for="closeDifLabel" >
				<span>Diferencia</span>
				<input id="inputCloseDif" type="text" required/>
			</label>
			<label for="closePendingLabel" >
				<span>Saldo Pendiente</span>
				<input id="inputClosePending" type="text" required/>
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