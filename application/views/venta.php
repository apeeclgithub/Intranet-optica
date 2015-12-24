<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<h2>VENTA</h2>
	<div id="dataSale">
		<div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text"  id="saleDate">
				<label class="mdl-textfield__label" for="saleDate">Fecha</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text"  id="saleTime">
				<label class="mdl-textfield__label" for="saleTime">Hora</label>
			</div>
		</div>
		<div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="^\d{1,2}\d{3}\d{3}[-][0-9kK]{1}$" id="clientRut">
				<label class="mdl-textfield__label" for="clientRut">Rut</label>
				<span class="mdl-textfield__error">Ingrese rut válido</span>
			</div>		
			<div id="tt1" class="icon material-icons"><a class="btnIcons" href="#"><i class="material-icons">search</i></a></div>
			<div class="mdl-tooltip mdl-tooltip--large" for="tt1">
				Buscar Cliente
			</div>&nbsp;&nbsp;&nbsp;
			<div id="tt2" class="icon material-icons"><a class="btnIcons" href="#"><i class="material-icons">person_add</i></a></div>
			<div class="mdl-tooltip mdl-tooltip--large" for="tt2">
				Agregar Cliente
			</div>	
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<div class="mdl-selectfield">
				<label>Marca</label>
				<select class="browser-default">
					<option value="" disabled selected>Marca</option>
					<?php 
						require '../controller/selectMarca.php';
					?>
				</select>
			</div>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<div class="mdl-selectfield">
				<label>Color</label>
				<select class="browser-default">
					<option value="" disabled selected>Color</option>
				</select>
			</div>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="productStock">
			<label class="mdl-textfield__label" for="productStock">Stock</label>
			<span class="mdl-textfield__error">Ingresar solo números</span>
		</div>
    </div>
    <div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="textAreaDesc">
			<textarea class="mdl-textfield__input" type="text" pattern="[w-\.]" rows= "4" id="productDesc"></textarea>
			<label class="mdl-textfield__label" for="productDesc">Descripción</label>
			<span class="mdl-textfield__error">No puede ser vacío</span>
		</div>
    </div>
	<div>
		<form action="#">
		<br><div class="fontItem">BUSCAR PRODUCTO</div><br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="search-expandable2">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search-expandable2">
						<label class="mdl-textfield__label" for="search-expandable2">
							Ingrese código de producto
						</label>
					</div>
				</div>
		</form>
	</div>
	<div >
		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
		  <thead>
		    <tr>
				<th class="mdl-data-table__cell--non-numeric">Código</th>
				<th class="mdl-data-table__cell--non-numeric">Marca</th>
				<th class="mdl-data-table__cell--non-numeric">Color</th>
				<th>Stock</th>
				<th class="mdl-data-table__cell--non-numeric">Descripción</th>
				<th></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
				<td class="mdl-data-table__cell--non-numeric">Código1</td>
				<td class="mdl-data-table__cell--non-numeric">Marca</td>
				<td class="mdl-data-table__cell--non-numeric">Color</td>
				<td>Stock</td>
				<td class="mdl-data-table__cell--non-numeric">Descripción</td>
				<td>
					<div class="btnRight">
						<div class="interior">
							<a class="btnIcons" href="#open-modal-edit"><i class="material-icons">edit</i></a>&nbsp;&nbsp;&nbsp;
						</div>
						<div class="interior">
							<a class="btnIcons" href="#open-modal-delete"><i class="material-icons">delete</i></a>
						</div>
					</div>
				</td>
		    </tr>
		    <tr>
				<td class="mdl-data-table__cell--non-numeric">Código2</td>
				<td class="mdl-data-table__cell--non-numeric">Marca</td>
				<td class="mdl-data-table__cell--non-numeric">Color</td>
				<td>Stock</td>
				<td class="mdl-data-table__cell--non-numeric">Descripción</td>
				<td>
					<div class="btnRight">
						<div class="interior">
							<a class="btnIcons" href="#open-modal-edit"><i class="material-icons">edit</i></a>&nbsp;&nbsp;&nbsp;
						</div>
						<div class="interior">
							<a class="btnIcons" href="#open-modal-delete"><i class="material-icons">delete</i></a>
						</div>
					</div>
				</td>
		    </tr>
		    <tr>
				<td class="mdl-data-table__cell--non-numeric">Código3</td>
				<td class="mdl-data-table__cell--non-numeric">Marca</td>
				<td class="mdl-data-table__cell--non-numeric">Color</td>
				<td>Stock</td>
				<td class="mdl-data-table__cell--non-numeric">Descripción</td>
				<td>
					<div class="btnRight">
						<div class="interior">
							<a class="btnIcons" href="#open-modal-edit"><i class="material-icons">edit</i></a>&nbsp;&nbsp;&nbsp;
						</div>
						<div class="interior">
							<a class="btnIcons" href="#open-modal-delete"><i class="material-icons">delete</i></a>
						</div>
					</div>
				</td>
		    </tr>
		  </tbody>
		</table>
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
	<!-- modal marca-->
	<div id="open-modal" class="modal-window">
	    <div>
	     <h1>AGREGAR MARCA</h1>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productBrand">
				<label class="mdl-textfield__label" for="productBrand">Marca</label>
				<span class="mdl-textfield__error">No puede ser vacío</span>
			</div>
			<div>
				<button class="mdl-button mdl-button--raised mdl-button--colored">Guardar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
	    </div>
	</div>
	<!-- modal color -->
	<div id="open-modal-color" class="modal-window">
	    <div>
	     <h1>AGREGAR COLOR</h1>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productColor">
				<label class="mdl-textfield__label" for="productColor">Color</label>
				<span class="mdl-textfield__error">No puede ser vacío</span>
			</div>
				<div>
				<button class="mdl-button mdl-button--raised mdl-button--colored">Guardar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
	    </div>
	</div>
	<!--modal editar -->
	<div id="open-modal-edit" class="modal-window">
	    <div>
			<h1>EDITAR PRODUCTO</h1>
			<div id="dataProductsEdit">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productCode">
					<label class="mdl-textfield__label" for="productCode">Código</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<div class="mdl-selectfield">
						<label>Marca</label>
						<select class="browser-default">
							<option value="" disabled selected>Marca</option>
							<option value="1">Marca 1</option>
							<option value="2">Marca 2</option>
							<option value="3">Marca 3</option>
						</select>
					</div>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<div class="mdl-selectfield">
						<label>Color</label>
						<select class="browser-default">
							<option value="" disabled selected>Color</option>
							<option value="1">Color 1</option>
							<option value="2">Color 2</option>
							<option value="3">Color 3</option>
						</select>
					</div>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="productStock">
					<label class="mdl-textfield__label" for="productStock">Stock</label>
					<span class="mdl-textfield__error">Ingresar solo números</span>
				</div>
			</div>
			<div>
				<button class="mdl-button mdl-button--raised mdl-button--colored">Guardar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
	    </div>
	</div>
	<!--modal eliminar -->
	<div id="open-modal-delete" class="modal-window">
	    <div>
			<h1>ELIMINAR PRODUCTO</h1>
			<div>
				<button class="mdl-button mdl-button--raised mdl-button--colored">Aceptar</button>
				<button class="mdl-button mdl-button--raised mdl-button--colored" ><a href="#modal-close" title="Close" id="modal-close">Cancelar</a></button>
			</div>
	    </div>
	</div>
</div>
<?php include('footer.php') ?>