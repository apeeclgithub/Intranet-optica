<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<h2>INVENTARIO</h2>
	<div class="fontItem">AGREGAR PRODUCTO</h3><br><br>
	<div id="dataProducts">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productCode">
			<label class="mdl-textfield__label" for="productCode">Código</label>
			<span class="mdl-textfield__error">No puede ser vacío</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productBrand">
			<label class="mdl-textfield__label" for="productBrand">Marca</label>
			<span class="mdl-textfield__error">No puede ser vacío</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield">
			<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productColor">
			<label class="mdl-textfield__label" for="productColor">Color</label>
			<span class="mdl-textfield__error">No puede ser vacío</span>
		</div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="productStock">
			<label class="mdl-textfield__label" for="productStock">Stock</label>
		</div>
    </div>
    <div>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="textAreaDesc">
			<textarea class="mdl-textfield__input" type="text" pattern="[w-\.]" rows= "4" id="productDesc"></textarea>
			<label class="mdl-textfield__label" for="productDesc">Descripción</label>
			<span class="mdl-textfield__error">No puede ser vacío</span>
		</div>
    </div>
	<div >
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
					<button class="mdl-button mdl-js-button mdl-button--icon">
		  				<i class="material-icons">edit</i>
					</button>		
					<button class="mdl-button mdl-js-button mdl-button--icon">
		  				<i class="material-icons">delete</i>
					</button>
				</td>
		    </tr>
		    <tr>
				<td class="mdl-data-table__cell--non-numeric">Código2</td>
				<td class="mdl-data-table__cell--non-numeric">Marca</td>
				<td class="mdl-data-table__cell--non-numeric">Color</td>
				<td>Stock</td>
				<td class="mdl-data-table__cell--non-numeric">Descripción</td>
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
				<td class="mdl-data-table__cell--non-numeric">Código3</td>
				<td class="mdl-data-table__cell--non-numeric">Marca</td>
				<td class="mdl-data-table__cell--non-numeric">Color</td>
				<td>Stock</td>
				<td class="mdl-data-table__cell--non-numeric">Descripción</td>
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
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Detalle Inventario</button>
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Productos más vendidos</button>
	</div>
</div>
<?php include('footer.php') ?>