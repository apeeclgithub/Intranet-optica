<?php 
	
	if(isset($_GET['cheques'])){
		$cheques = $_GET['cheques']+1;

		for ($i=1; $i < $cheques; $i++) { 
			?>
				<div class="fontItem">CHEQUE <?php echo $i; ?></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="checkSailNumber<?php echo $i; ?>">
					<label class="mdl-textfield__label" for="checkSailNumber">Número Cheque</label>
					<span class="mdl-textfield__error">Ingresar solo números</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="checkSailBank<?php echo $i; ?>">
					<label class="mdl-textfield__label" for="checkSailBank">Banco</label>
				</div>
				<br><br>Fecha Cheque<br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input id="checkSailDate<?php echo $i; ?>" class="mdl-textfield__input" type="date">	
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="checkSailTitular<?php echo $i; ?>">
					<label class="mdl-textfield__label" for="checkSailTitular">Titular</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input onkeyup="actualizaMontoCheque(<?php echo $cheques; ?>)" class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleCheque<?php echo $i; ?>">
					<label class="mdl-textfield__label" for="amountSaleCheque">Monto</label>
					<span class="mdl-textfield__error">Ingresar solo números</span>
				</div>
			<?php
		}
	}
	
?>