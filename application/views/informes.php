<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id ="content">
	<h2>REPORTES</h2>
	<div style="border:1px solid black;">Reporte Diario (Incluye detalle de venta)
		<div>Seleccione Fecha</div>
		<input id="dateSaleDaily" type="date">
		<button>Reporte diario</button>
	</div>
	<div style="border:1px solid black;">Reporte Mensual (Incluye detalle de venta)
		<div>Seleccione Mes</div>
		<input id="dateSaleMonth" type="date">
		<button>Reporte mensual</button>
	</div>
	<div style="border:1px solid black;">Reporte Saldo pendiente 
		<div>Seleccione Fecha</div>
		<input id="dateBalance" type="date">
		<button>Reporte Saldo</button>
	</div>
	<div style="border:1px solid black;">Exportar Detalle Inventario
		<button>Detalle Inventario</button>
	</div>
	<div style="border:1px solid black;">Exportar Productos más vendidos
		<button>Productos más Vendidos</button>
	</div>
	<div style="border:1px solid black;">Exportar Listado Clientes
		<button>Exportar Listado</button>
	</div>
</div>
<?php include('footer.php') ?>