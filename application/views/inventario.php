<?php include('header.php');?>
<?php include('nav_menu.php') ?>

<div id ="content">
	<div>Inventario</div>
	<div>
		<label for="mail_label" >
			<span>Buscador</span>
			<input id="input_search" type="text" />
		</label> 	
	</div>
	<div>
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
        <label for="add_product_stock_label">
        	<span>Stock</span>
            <input id="input_add_product_stock" type="number" required/>
        </label>
	</div>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/dt-1.10.10/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/s/dt/dt-1.10.10/datatables.min.js"></script>
</div>

<?php include('footer.php') ?>