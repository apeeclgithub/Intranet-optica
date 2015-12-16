<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<h2>CLIENTES</h2>
	<div id="addClientForm">
		<div>AGREGAR CLIENTE</div>
		<div id="dataClient">
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
        </div>
		<div >
			<form action="#">
				<div>Buscador</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="site-search">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
					<input class="mdl-textfield__input" type="search" id="site-search" />
					<label class="mdl-textfield__label" for="site-search">Buscar</label>
					</div>
				</div>
			</form>
		</div>
		<div >
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
			  <thead>
			    <tr>
					<th class="mdl-data-table__cell--non-numeric">Nombre</th>
					<th>Rut</th>
					<th>Teléfono</th>
					<th>Dirección</th>
					<th>Giro</th>
					<th>Cheques</th>
					<th></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
					<td class="mdl-data-table__cell--non-numeric">Nombre1</td>
					<td>Rut1</td>
					<td>Fono1</td>
					<td>Dirección1</td>
					<td>Giro1</td>
					<td>Cheques1</td>
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
					<td>Rut2</td>
					<td>Fono2</td>
					<td>Dirección2</td>
					<td>Giro2</td>
					<td>Cheques2</td>
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
					<td>Rut3</td>
					<td>Fono3</td>
					<td>Dirección3</td>
					<td>Giro3</td>
					<td>Cheques3</td>
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