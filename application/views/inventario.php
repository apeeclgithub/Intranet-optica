<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<div>Inventario</div>

	<div style="border:1px solid black;">
		<div>Agregar Producto</div>
		<label for="add_product_cod_label" >
			<span>Código</span>
			<input id="input_add_product_cod" type="text" required/>
		</label>
		<label for="add_product_brand_label" >
			<span>Marca</span>
			<input id="input_add_product_brand" type="text" required/>
		</label>	
		<label for="add_product_colour_label" >
			<span>Color</span>
			<input id="input_add_product_colour" type="text" required/>
		</label>
		<label for="add_product_desc_label" >
			<span>Descripción</span>
			<textarea rows="4" cols="50" id="input_add_product_desc" type="text" required></textarea>
		</label>		
        <label for="add_product_stock_label">
        	<span>Stock</span>
            <input id="input_add_product_stock" type="number" required/>
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
</div>

<?php include('footer.php') ?>