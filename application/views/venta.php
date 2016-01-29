<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<h2>VENTA</h2>
	<div id="dataSale">
		<div id="dataClient"><!--
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text"  id="saleDate">
				<label class="mdl-textfield__label" for="saleDate">Fecha</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text"  id="saleTime">
				<label class="mdl-textfield__label" for="saleTime">Hora</label>
			</div>-->
			<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
				<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
				<span class="mdl-radio__label">Boleta</span>
			</label>
			<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
				<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
				<span class="mdl-radio__label">Factura</span>
			</label>		
		</div>
		<div id="dataClient">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

				<form action="#" class="searchClientSail">
					<br><div class="fontItem">BUSCAR CLIENTE</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="search-expandable2">
							<i class="material-icons">search</i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" id="search-expandable2">
							<label class="mdl-textfield__label" for="search-expandable2">
								Ingrese Rut
							</label>
						</div>
					</div>
				</form>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

				<div class="submitProduct">
					<button onclick="" class="mdl-button mdl-button--raised mdl-button--colored">AGREGAR Cliente</button>
				</div>
			</div>
			<div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut">
					<label class="mdl-textfield__label" for="clientRut">Rut</label>
					<span class="mdl-textfield__error">Ingrese rut válido</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="clientName">
					<label class="mdl-textfield__label" for="clientName">Nombre</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
			</div>
		</div>
	</div>
	<div id="tablaProducts">
		<?php require '../controller/selectProductSail.php'; ?>
	</div>
	<div id="tablaProducts">
		<?php require '../controller/selectProductSailDetail.php'; ?>
		<div id="dataClient">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleTotal">
				<label for="amountSaleTotal">Total</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleTotalIva">
				<label for="amountSaleTotalIva">Total con Iva</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleTotalFinal">
				<label for="amountSaleTotalFinal">Total</label>
				<span class="mdl-textfield__error">Ingresar solo números</span>
			</div>
		</div>
	</div>
	<div id="dataClient">
		<div class="fontItem">MEDIO DE PAGO</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
				<input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
				<span class="mdl-checkbox__label">Efectivo</span>
			</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
				<input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
				<span class="mdl-checkbox__label">Tarjeta</span>
			</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
				<input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
				<span class="mdl-checkbox__label">Cheque</span>
			</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSale">
			<label class="mdl-textfield__label" for="amountSale">Monto</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSale">
			<label class="mdl-textfield__label" for="amountSale">Monto</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSale">
			<label class="mdl-textfield__label" for="amountSale">Monto</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" id="cardSail">
			<label class="mdl-textfield__label" for="cardSail">Tipo Tarjeta</label>
		</div>
	</div>
	<div id="dataClient">
		<div class="fontItem">CHEQUE</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="checkSailNumber">
			<label class="mdl-textfield__label" for="checkSailNumber">Número Cheque</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" id="checkSailBank">
			<label class="mdl-textfield__label" for="checkSailBank">Banco</label>
		</div>
		<br><br>Fecha Cheque<br>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input id="checkSailDate" class="mdl-textfield__input" type="date">	
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" id="checkSailTitular">
			<label class="mdl-textfield__label" for="checkSailTitular">Titular</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleCheque">
			<label class="mdl-textfield__label" for="amountSaleCheque">Monto</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
	</div>
</div>
<div><br><br>
	<div class="interior">
		<a class="btn" href="#open-modal">AGREGAR MARCA</a>
	</div>
	<div class="interior">
		<a class="btn" href="#open-modal-color">AGREGAR COLOR</a>
	</div>
	<div class="interior">
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Detalle Inventario</button>	
	</div>
	<div class="interior">
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Productos más vendidos</button>
	</div>
</div>
</div>
<?php include('footer.php') ?>