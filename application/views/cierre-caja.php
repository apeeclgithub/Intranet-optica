<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<h2>CIERRE DE CAJA</h2>
	<div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text"  id="closingCashDate">
			<label class="mdl-textfield__label" for="closingCashDate">Fecha</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text"  id="closingCashTime">
			<label class="mdl-textfield__label" for="closingCashTime">Hora</label>
		</div>
	</div>	
	<div class="closingCash">
		<div>
			<div class="fontItem">SISTEMA</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashMoneySis" >
				<label class="mdl-textfield__label" for="closingCashMoneySis">Efectivo</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashCardSis" >
				<label class="mdl-textfield__label" for="closingCashCardSis">Tarjeta de Crédito</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashCheckSis" >
				<label class="mdl-textfield__label" for="closingCashCheckSis">Cheque</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashTotalSis" >
				<label class="mdl-textfield__label" for="closingCashTotalSis">Total</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
		</div>
		<div>
			<div class="fontItem">REAL</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashMoneyReal" >
				<label class="mdl-textfield__label" for="closingCashMoneyReal">Efectivo</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashCardReal" >
				<label class="mdl-textfield__label" for="closingCashCardReal">Tarjeta de Crédito</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashCheckReal" >
				<label class="mdl-textfield__label" for="closingCashCheckReal">Cheque</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashTotalReal" >
				<label class="mdl-textfield__label" for="closingCashTotalReal">Total</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
		</div>
		<div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashDif" >
				<label class="mdl-textfield__label" for="closingCashDif">Diferencia</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="closingCashBalance" >
				<label class="mdl-textfield__label" for="closingCashBalance">Saldo Pendiente</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div>
				<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="RESUMEN VENTA DIARIA">
				<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="CERRAR CAJA">
			</div>
		</div>
		<div><br><br>
			<div class="fontItem">DETALLE DE VENTA</div><br>
			<div >
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
					<thead>
						<tr>
							<th>N° Venta</th>
							<th class="mdl-data-table__cell--non-numeric">Código</th>
							<th class="mdl-data-table__cell--non-numeric">Producto</th>
							<th class="mdl-data-table__cell--non-numeric">Desc.</th>
							<th>Precio Unit.</th>
							<th>Cant.</th>
							<th class="mdl-data-table__cell--non-numeric">Forma Pago</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div><br>
		<div class="interior">
			<button class="mdl-button mdl-button--raised mdl-button--colored">EXPORTAR CIERRE CAJA </button>	
		</div>
		<div class="interior">
			<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Saldo pendiente diario</button>
		</div>
	</div>

</div>
<?php include('footer.php') ?>