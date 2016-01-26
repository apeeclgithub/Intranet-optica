<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<h2>CLIENTES</h2>
	<div id="addClientForm">
		<div id="dataClient">
			<div class="fontItem">AGREGAR CLIENTE</div><br><br>
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
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="clientPhone">
				<label class="mdl-textfield__label" for="clientPhone">Teléfono</label>
				<span class="mdl-textfield__error">Sólo números</span>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="clientGir">
				<label class="mdl-textfield__label" for="clientGir">Giro</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="clientAddress">
				<label class="mdl-textfield__label" for="clientAddress">Dirección</label>
				<span class="mdl-textfield__error">No puede ser vacío</span>
			</div>
			<div class="submitProduct">
				<button onclick="insertClient()" class="mdl-button mdl-button--raised mdl-button--colored">Guardar Cliente</button>
			</div>
		</div>
		<div id="tablaClients">
			<?php require '../controller/selectClientAll.php'; ?>
		</div>
		<div>
			<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Listado</button>
		</div>
	</div>
	<!--modal editar cliente -->
	<div id="open-modal-edit-client" class="modal-window">
		<div>
			<h1>EDITAR CLIENTE</h1>
			<div>
				<input type="hidden" id="cliId">
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="clientName">
					<label  for="clientName">Nombre</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut">
					<label  for="clientRut">Rut</label>
					<span class="mdl-textfield__error">Ingrese rut válido</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="clientPhone">
					<label  for="clientPhone">Teléfono</label>
					<span class="mdl-textfield__error">Sólo números</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" id="clientGir">
					<label for="clientGir">Giro</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield ">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="clientAddress">
					<label for="clientAddress">Dirección</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
				<button onclick="editClient()" class="mdl-button mdl-button--raised mdl-button--colored">Aceptar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
		</div>
	</div>
	<!--modal eliminar cliente -->
	<div id="open-modal-delete-client" class="modal-window">
		<div>
			<h1>ELIMINAR CLIENTE</h1>
			<div>
				<button onclick="" class="mdl-button mdl-button--raised mdl-button--colored">Aceptar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
		</div>
	</div>
	<!--modal cheque cliente -->
	<div id="open-modal-cheque" class="modal-window">
		<div>
			<h1>CHEQUES CLIENTE</h1>
			<div>
				CHEQUE1<br>
				CHEQUE2<br>
				CHEQUE3<br>
				CHEQUE4<br>
			</div>
			<div>
				<button onclick="" class="mdl-button mdl-button--raised mdl-button--colored">Aceptar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>