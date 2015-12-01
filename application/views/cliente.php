<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id="content">
	<div>Clientes</div>
	<div style="border:1px solid black;">
		<div>Agregar Cliente</div>
		<label for="add_client_name_label" >
			<span>Nombre</span>
			<input id="input_add_client_name" type="text" required/>
		</label>
		<label for="add_client_rut_label" >
			<span>Rut</span>
			<input id="input_add_client_rut" type="text" required/>
		</label>	
		<label for="add_client_phone_label" >
			<span>Teléfono</span>
			<input id="input_add_client_phone" type="text" required/>
		</label>
		<label for="add_client_address_label" >
			<span>Dirección</span>
			<input id="input_add_client_address" type="text" required/>
		</label>		
        <label for="add_client_gir_label">
        	<span>Giro</span>
            <input id="input_add_client_gir" type="text" required/>
        </label>
	</div>
		<div style="border:1px solid black;">
		<label for="mail_label" >
			<span>Buscador</span>
			<input id="input_search" type="text" />
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
</div>
<?php include('footer.php') ?>