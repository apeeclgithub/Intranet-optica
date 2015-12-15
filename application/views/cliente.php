<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<h2>Clientes</h2>
	<div id="addClientForm" style="border:1px solid black;">
		<div>Agregar Cliente</div>
		<div id="dataClient">
			<label for="addClientNameLabel" id="addClientNameLabel">
				<span>Nombre</span>
				<input id="inputAddClientName" type="text" required/>
			</label>
			<label for="addClientRutLabel" id="addClientRutLabel" >
				<span>Rut</span>
				<input id="inputAddClientRut" type="text" required/>
			</label>			
			<label for="addClientPhoneLabel" id="addClientPhoneLabel">
				<span>Teléfono</span>
				<input id="inputAddClientPhone" type="text" required/>
			</label>
			<label for="addClientAddressLabel" id="addClientAddressLabel" >
				<span>Dirección</span>
				<input id="inputAddClientAddress" type="text" required/>
			</label>				
	        <label for="addClientGirLabel" id="addClientGirLabel">
	        	<span>Giro</span>
	            <input id="inputAddClientGir" type="text" required/>
	        </label>
        </div>
		<div style="border:1px solid black;">
		<label for="searchClientLabel" id="searchClientLabel">
			<span>Buscador</span>
			<input id="inputClientSearch" type="text" />
			<button>Buscar</button>
		</label> 	
		</div>
	<div style="border:1px solid black;">
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
	<div style="border:1px solid black;">Exportar Listado Clientes
		<button>Exportar Listado</button>
	</div>
</div>
</div>
<?php include('footer.php') ?>