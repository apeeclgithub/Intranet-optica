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
			<div class="mdl-textfield mdl-js-textfield">
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
				<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="GUARDAR CLIENTE">
			</div>
		</div>
		<div >
			<form action="#" class="formSearchClient">
				<br><div class="fontItem">BUSCAR CLIENTE</div><br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="search-expandable2">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search-expandable2">
						<label class="mdl-textfield__label" for="search-expandable2">
							Ingrese rut cliente
						</label>
					</div>
				</div>
			</form>
		</div>
		<div >
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Nombre</th>
						<th class="mdl-data-table__cell--non-numeric">Rut</th>
						<th class="mdl-data-table__cell--non-numeric">Teléfono</th>
						<th class="mdl-data-table__cell--non-numeric">Dirección</th>
						<th class="mdl-data-table__cell--non-numeric">Giro</th>
						<th class="mdl-data-table__cell--non-numeric">Cheques</th>
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
						<td class="mdl-data-table__cell--non-numeric">Cheques1</td>
						<td>
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons">edit</i>
							</button>		
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons">delete</i>
							</button>
						</td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">Nombre2</td>
						<td class="mdl-data-table__cell--non-numeric">Rut2</td>
						<td class="mdl-data-table__cell--non-numeric">Fono2</td>
						<td class="mdl-data-table__cell--non-numeric">Dirección2</td>
						<td class="mdl-data-table__cell--non-numeric">Giro2</td>
						<td class="mdl-data-table__cell--non-numeric">Cheques2</td>
						<td>
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons">edit</i>
							</button>		
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons">delete</i>
							</button>
						</td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">Nombre3</td>
						<td class="mdl-data-table__cell--non-numeric">Rut3</td>
						<td class="mdl-data-table__cell--non-numeric">Fono3</td>
						<td class="mdl-data-table__cell--non-numeric">Dirección3</td>
						<td class="mdl-data-table__cell--non-numeric">Giro3</td>
						<td class="mdl-data-table__cell--non-numeric">Cheques3</td>
						<td>
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons">edit</i>
							</button>		
							<button class="mdl-button mdl-js-button mdl-button--icon">
								<i class="material-icons">delete</i>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Listado</button>
		</div>
	</div>
</div>
<?php include('footer.php') ?>