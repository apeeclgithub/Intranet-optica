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
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut">
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
		<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {
				$('#paginationClients').DataTable( {
					"pagingType": "full_numbers"
				} );
			} );
		</script>
		<div id="dataClient">
			<div class="fontItem">LISTADO DE CLIENTES</div>
			<table id="paginationClients" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp display" cellspacing="0">
				<thead style="  cursor: pointer;">
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Nombre</th>
						<th class="mdl-data-table__cell--non-numeric">Rut</th>
						<th class="mdl-data-table__cell--non-numeric">Teléfono</th>
						<th class="mdl-data-table__cell--non-numeric">Dirección</th>
						<th class="mdl-data-table__cell--non-numeric">Giro</th>
						<th>Cheques</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">Nombre1</td>
						<td class="mdl-data-table__cell--non-numeric">Rut1</td>
						<td class="mdl-data-table__cell--non-numeric">Fono1</td>
						<td class="mdl-data-table__cell--non-numeric">Dirección1</td>
						<td class="mdl-data-table__cell--non-numeric">Giro1</td>
						<td>
							<a href="#open-modal-cheque" class="btnIcons">
								<i class="material-icons">search</i>
							</a>
						</td>
						<td >
							<div class="btnRight">
								<div class="interior">
									<a href="#open-modal-edit-client" class="btnIcons">
										<i class="material-icons">edit</i>
									</a>
								</div>
								<div class="interior">

									<a href="#open-modal-delete-client" class="btnIcons">
										<i class="material-icons">delete</i>
									</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">Nombre2</td>
						<td class="mdl-data-table__cell--non-numeric">Rut2</td>
						<td class="mdl-data-table__cell--non-numeric">Fono2</td>
						<td class="mdl-data-table__cell--non-numeric">Dirección2</td>
						<td class="mdl-data-table__cell--non-numeric">Giro2</td>
						<td>
							<a href="#open-modal-cheque" class="btnIcons">
								<i class="material-icons">search</i>
							</a>
						</td>
						<td>
							<div class="btnRight">
								<div class="interior">
									<a href="#open-modal-edit-client" class="btnIcons">
										<i class="material-icons">edit</i>
									</a>
								</div>
								<div class="interior">

									<a href="#open-modal-delete-client" class="btnIcons">
										<i class="material-icons">delete</i>
									</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">Nombre3</td>
						<td class="mdl-data-table__cell--non-numeric">Rut3</td>
						<td class="mdl-data-table__cell--non-numeric">Fono3</td>
						<td class="mdl-data-table__cell--non-numeric">Dirección3</td>
						<td class="mdl-data-table__cell--non-numeric">Giro3</td>
						<td>
							<a href="#open-modal-cheque" class="btnIcons">
								<i class="material-icons">search</i>
							</a>
						</td>
						<td>
							<div class="btnRight">
								<div class="interior">
									<a href="#open-modal-edit-client" class="btnIcons">
										<i class="material-icons">edit</i>
									</a>
								</div>
								<div class="interior">

									<a href="#open-modal-delete-client" class="btnIcons">
										<i class="material-icons">delete</i>
									</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
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
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="clientName">
					<label class="mdl-textfield__label" for="clientName">Nombre</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut">
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
				<button onclick="" class="mdl-button mdl-button--raised mdl-button--colored">Aceptar</button>
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