<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<h2>VENTA</h2>
	<div id="dataSale">
		<div id="dataClient">
			<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#open-modal-clientSailAdd" title="Close" id="modal-close">BUSCAR CLIENTE</a></button>
			<div class="fontItem">CLIENTE</div>
			<input id="clientId" type="hidden" value="" />
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="clientName">
				<label class="mdl-textfield__label" for="clientName">Nombre</label>
				<span class="mdl-textfield__error">No puede ser vacío</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-input__expandable-holder	">
				<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut" placeholder="1234567-9">
				<label class="mdl-textfield__label" for="clientRut">Rut</label>
				<span class="mdl-textfield__error">Ingrese rut válido</span>
			</div>
		</div>
	</div>
	<div id="tablaProducts">
		<?php require '../controller/selectProductSail.php'; ?>
	</div>
	<div id="dataClient">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
			<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
			<span class="mdl-radio__label">SIN IVA</span>
		</label>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"></div>
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
			<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
			<span class="mdl-radio__label">CON IVA</span>
		</label>		
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
			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
				<input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
				<span class="mdl-checkbox__label">Cheque</span>
			</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
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
	<div><br><br>
		<a href="../../application/pdf/pdf.php" target="_blank" >PDF</a>
		<div class="interior">
			<a class="btn" href="#">AGREGAR MARCA</a>
		</div>
		<div class="interior">
			<a class="btn" href="#">AGREGAR COLOR</a>
		</div>
		<div class="interior">
			<a class="btn" href="#">Exportar Detalle Inventario</a>	
		</div>
		<div class="interior">
			<a class="btn" href="#">Exportar Productos más vendidos</a>
		</div>
	</div>
</div>
<!--modal añade cliente a venta -->
<div id="open-modal-clientSailAdd" class="modal-window addClientSail">
	<div>
		<h1>SELECCIONAR CLIENTE</h1>
		<div id="tablaClients">
			<?php require '../controller/selectClientAllSail.php'; ?>
		</div>
		<button class="mdl-button mdl-button--raised mdl-button--colored"><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
	</div>
</div>
<?php include('footer.php') ?>