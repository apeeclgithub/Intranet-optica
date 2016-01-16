<?php include('header.php');?>
<?php include('nav_menu.php');
require_once '../model/Database.php'; ?>

<div id ="content">
	<h2>INVENTARIO</h2>
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
		<div class="mdl-tabs__tab-bar">
			<a href="#addProductPanel" class="mdl-tabs__tab is-active">AGREGAR PRODUCTO</a>
			<a href="#addBrandPanel" class="mdl-tabs__tab">AGREGAR MARCA</a>
			<a href="#addColorPanel" class="mdl-tabs__tab">AGREGAR COLOR</a>
		</div>

		<div class="mdl-tabs__panel is-active formAddProduct" id="addProductPanel">
			<!--<form class="formAddProduct">-->
				<div class="fontItem">AGREGAR PRODUCTO</div>
				<div id="dataProducts">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" pattern="[w-\.]{1,20}" id="productCode" >
						<label class="mdl-textfield__label" for="productCode">Código</label>
						<span class="mdl-textfield__error">No puede ser vacío</span>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<?php require '../controller/selectMarca.php'; ?>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<?php require '../controller/selectColor.php'; ?>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" pattern="[0-9]*{1,20}" id="productStock" >
						<label class="mdl-textfield__label" for="productStock">Stock</label>
						<span class="mdl-textfield__error">Ingresar solo números</span>
					</div>
				</div>
				<div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="textAreaDesc">
						<textarea class="mdl-textfield__input" type="text" pattern="[w-\.]{1,4000}" rows= "4" id="productDesc" ></textarea>
						<label class="mdl-textfield__label" for="productDesc">Descripción</label>
						<span class="mdl-textfield__error">No puede ser vacío</span>
					</div>
				</div>
				<div class="submitProduct">
					<input onclick="insertProducto()" class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="GUARDAR PRODUCTO">
				</div>
			<!--</form>-->
		</div>
		<div class="mdl-tabs__panel" id="addBrandPanel">
			<div class="contentProducts">
				<div class="fontItem">AGREGAR MARCA</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productBrand">
					<label class="mdl-textfield__label" for="productBrand">Marca</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
				<div>
					<button onclick="insertMarca()" class="mdl-button mdl-button--raised mdl-button--colored">Guardar Marca</button>
				</div>
			</div>
		</div>
		<div class="mdl-tabs__panel" id="addColorPanel">
			<div class="contentProducts">
				<div class="fontItem">AGREGAR COLOR</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[w-\.]" id="productColor" >
					<label class="mdl-textfield__label" for="productColor">Color</label>
					<span class="mdl-textfield__error">No puede ser vacío</span>
				</div>
				<div>
					<button class="mdl-button mdl-button--raised mdl-button--colored">Guardar Color</button>
				</div>
			</div>
		</div>
	</div>
	<div>
		<form action="#" class="searchProduct">
			<br><div class="fontItem">BUSCAR PRODUCTO</div>
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
		<?php require '../controller/selectProductAll.php'; ?>
	</div>
	<div class="buttonProducts"><br><br>
		<div class="interior">
			<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Detalle Inventario</button>	
		</div>
		<div class="interior">
			<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Productos más vendidos</button>
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