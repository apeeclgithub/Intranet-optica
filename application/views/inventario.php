<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<div>Inventario</div>

	<div style="border:1px solid black;">
		<div>Agregar Producto</div>
		<label for="addProductCodLabel" >
			<span>Código</span>
			<input id="inputAddProductCod" type="text" required/>
		</label>
		<label for="addProductBrandLabel" >
			<span>Marca</span>
			<input id="inputAddProductBrand" type="text" required/>
		</label>	
		<label for="addProductColourLabel" >
			<span>Color</span>
			<input id="inputAddProductColour" type="text" required/>
		</label>
		<label for="addProductDescLabel" >
			<span>Descripción</span>
			<textarea rows="4" cols="50" id="inputAddProductDesc" type="text" required></textarea>
		</label>		
        <label for="addProductStockLabel">
        	<span>Stock</span>
            <input id="inputAddProductStock" type="number" required/>
        </label>
	</div>
	<div style="border:1px solid black;">
		<label for="searchInventLabel" >
			<span>Buscador</span>
			<input id="inputSearch" type="text" />
			<button>Buscar</button>
		</label> 	
	</div>
	<div style="border:1px solid black;">
		<table border="1">
			<tr>
				<td>Código</td>
				<td>Marca</td>
				<td>Color</td>
				<td>Descripción</td>
				<td>Stock</td>
				<td></td>
			</tr>
			<tr>
				<td>Cód1</td>
				<td>Marca1</td>
				<td>Color1</td>
				<td>Desc1</td>
				<td>Stock1</td>
				<td>
					<button>Eliminar</button>
					<button>Modificar</button>
				</td>
			</tr>
			<tr>
				<td>Cód2</td>
				<td>Marca2</td>
				<td>Color2</td>
				<td>Desc2</td>
				<td>Stock2</td>
				<td>
					<button>Eliminar</button>
					<button>Modificar</button>
				</td>
			</tr>
		</table>
	</div>
	<div style="border:1px solid black;">Exportar Detalle Inventario
		<button>Detalle Inventario</button>
	</div>
	<div style="border:1px solid black;">Exportar Productos más vendidos
		<button>Productos más Vendidos</button>
	</div>
</div>

<?php include('footer.php') ?>