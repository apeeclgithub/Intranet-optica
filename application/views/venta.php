<?php include('header.php');?>
<?php include('nav_menu.php'); ?>
<?php require_once '../model/classCarrito.php'; ?>

<div id ="content">
	<h2>VENTA</h2>
	<div id="dataSale">
		<div id="dataClient">
			<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#open-modal-clientSailAdd" title="Close" id="modal-close">BUSCAR CLIENTE</a></button>
			<div class="fontItem">CLIENTE</div>
			<input id="clientId" type="hidden" value="" />
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="clientName" disabled="disabled">
				<label  for="clientName">Nombre</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-input__expandable-holder	">
				<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut" disabled="disabled">
				<label  for="clientRut">Rut</label>
			</div>
		</div>
	</div>
	<div id="tablaProducts">
		<?php require '../controller/selectProductSail.php'; ?>
	</div>
		<div id="tablaProducts">
		<div id="tablaProductsDetail">
			<?php require '../controller/selectProductSailDetail.php'; ?>
		</div>
			
		<div id="valor_total">
			<div id="dataClient">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleTotal" 
					value="<?php echo $carrito->precio_total();?>">
					<label for="amountSaleTotal">Total</label>
					<span class="mdl-textfield__error">Ingresar solo números</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-iva">
						<input onclick="updateTotalIva()" type="checkbox" id="checkbox-iva" class="mdl-checkbox__input">
						<span class="mdl-checkbox__label">CON IVA</span>
					</label>	
				</div>
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
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSale">
			<label class="mdl-textfield__label" for="amountSale">Monto</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
	</div>
	<div id="dataClient">
	<div class="fontItem">MEDIO DE PAGO</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
				<input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
				<span class="mdl-checkbox__label">Cheque</span>
			</label>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<select onchange="cantCheque()" class="browser-default" name="chequeSelect" id="chequeSelect">
				<option value="" disabled selected>Cantidad de cheques</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSale" disabled>
			<label class="mdl-textfield__label" for="amountSale">Total</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>

		<?php require_once '../controller/functionCheque.php'; ?>
		
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