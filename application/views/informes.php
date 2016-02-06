<?php include('header.php');?>
<?php include('nav_menu.php') ?>
<div id ="content">
	<h2>REPORTES</h2>
	<!-- 
	<div class="fontItem" style="float:left;">REPORTE DIARIO (Incluye detalle de venta)
		<pre>Seleccione Fecha</pre>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input id="dateSaleDaily" class="mdl-textfield__input" type="date">
		</div>
		<div class="dateSaleDaily">
			<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="Reporte diario">
		</div>
	</div><br>
	<div class="fontItem" style="float:left;">REPORTE MENSUAL (Incluye detalle de venta)
		<pre>Seleccione Mes</pre>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input id="dateSaleMonth" class="mdl-textfield__input" type="date">	
		</div>
		<div class="dateSaleMonth">
			<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="REPORTE MENSUAL">
		</div>
	</div><br>
	<div class="fontItem" >REPORTE SALDO PENDIENTE
		<pre>Seleccione Fecha</pre>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input id="dateBalance" class="mdl-textfield__input" type="date">	
		</div>
		<div class="dateBalance">
			<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="Reporte Saldo">
		</div>
	</div><br>
	<div class="fontItem" >Exportar Detalle Inventario
		<button>Detalle Inventario</button>
	</div><br>
	<div class="fontItem" >Exportar Productos más vendidos
		<button>Productos más Vendidos</button>
	</div><br>
	<div class="fontItem" >Exportar Listado Clientes
		<button>Exportar Listado</button>
	</div>
-->
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
		<div class="mdl-tabs__tab-bar">
			<a href="#printDailyReportPanel" class="mdl-tabs__tab is-active">REPORTE DIARIO</a>
			<a href="#printMonthReportPanel" class="mdl-tabs__tab">REPORTE MENSUAL</a>
			<a href="#printBalanceReportPanel" class="mdl-tabs__tab">REPORTE SALDO PENDIENTE</a>
			<a href="#printSailDetail" class="mdl-tabs__tab">DETALLE POR N. VENTA</a>
		</div>

		<div class="mdl-tabs__panel is-active" id="printDailyReportPanel">
			<form class="formAddProduct">
				<div class="fontItem">REPORTE DIARIO (Incluye detalle de venta)</div>
				<br><p>Seleccione Fecha</p>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input id="dateSaleDaily" class="mdl-textfield__input" type="date">
				</div>
				<div class="dateSaleDaily">
					<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="Reporte diario">
				</div>
			</form>
		</div>
		<div class="mdl-tabs__panel" id="printMonthReportPanel">
			<div class="contentProducts">
				<div class="fontItem" style="float:left;">REPORTE MENSUAL (Incluye detalle de venta)</div>
				<br><br><p>Seleccione Fecha</p>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input id="dateSaleMonth" class="mdl-textfield__input" type="date">	
				</div>
				<div class="dateSaleMonth">
					<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="REPORTE MENSUAL">
				</div>
			</div>
		</div>
		<div class="mdl-tabs__panel" id="printBalanceReportPanel">
			<div class="contentProducts">
				<div class="fontItem" >REPORTE SALDO PENDIENTE</div>
				<br><p>Seleccione Fecha</p>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input id="dateBalance" class="mdl-textfield__input" type="date">	
				</div>
				<div class="dateBalance">
					<input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="Reporte Saldo">
				</div>
			</div><br>
		</div>
		<div class="mdl-tabs__panel" id="printSailDetail">
			<div class="contentProducts">
				<div class="fontItem" >REPORTE DETALLE DE VENTA</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="clientPhone">
					<label class="mdl-textfield__label" for="clientPhone">Número de Venta</label>
					<span class="mdl-textfield__error">Sólo números</span>
				</div>
				<div>
					<button class="mdl-button mdl-button--raised mdl-button--colored" >Imprimir</button>
				</div>
			</div><br>
		</div>
	</div>
	<div class="interior">
		<button class="mdl-button mdl-button--raised mdl-button--colored">EXPORTAR CIERRE CAJA </button>	
	</div>
	<div class="interior">
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Listado Clientes</button>
	</div>
	<div class="interior">
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Productos más vendidos</button>
	</div>
	<div class="interior">
		<button class="mdl-button mdl-button--raised mdl-button--colored">Exportar Detalle Inventario</button>
	</div>
</div>
<?php include('footer.php') ?>