<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<div>Clientes</div>
	<div style="border:1px solid black;">
		<div>Agregar Cliente</div>
		<label for="addClientNameLabel" >
			<span>Nombre</span>
			<input id="inputAddClientName" type="text" required/>
		</label>
		<label for="addClientRutLabel" >
			<span>Rut</span>
			<input id="inputAddClientRut" type="text" required/>
		</label>	
		<label for="addClientPhoneLabel" >
			<span>Teléfono</span>
			<input id="inputAddClientPhone" type="text" required/>
		</label>
		<label for="addClientAddressLabel" >
			<span>Dirección</span>
			<input id="inputAddClientAddress" type="text" required/>
		</label>		
        <label for="addClientGirLabel">
        	<span>Giro</span>
            <input id="inputAddClientGir" type="text" required/>
        </label>
	</div>
		<div style="border:1px solid black;">
		<label for="searchClientLabel" >
			<span>Buscador</span>
			<input id="inputClientSearch" type="text" />
			<button>Buscar</button>
		</label> 	
	</div>
	<div style="border:1px solid black;">
		<table border="1">
			<tr>
				<td>Nombre</td>
				<td>Rut</td>
				<td>Teléfono</td>
				<td>Dirección</td>
				<td>Giro</td>
				<td>Cheques</td>
				<td></td>
			</tr>
			<tr>
				<td>Nombre1</td>
				<td>Rut1</td>
				<td>Teléfono1</td>
				<td>Dirección1</td>
				<td>Giro1</td>
				<td>Cheques1</td>
				<td>
					<button>Eliminar</button>
					<button>Modificar</button>
				</td>
			</tr>
			<tr>
				<td>Nombre2</td>
				<td>Rut2</td>
				<td>Teléfono2</td>
				<td>Dirección2</td>
				<td>Giro2</td>
				<td>Cheques2</td>
				<td>
					<button>Eliminar</button>
					<button>Modificar</button>
				</td>
			</tr>
		</table>
	</div>
	<div style="border:1px solid black;">Exportar Listado Clientes
		<button>Exportar Listado</button>
	</div>
</div>
<?php include('footer.php') ?>