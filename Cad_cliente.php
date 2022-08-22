<?php
	require __DIR__.'/header.php';
	require __DIR__.'/src/Cliente.php';


	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$cliente = new Cliente($mysql);
		$cliente->inserir(
			$_POST['fantasia'], 
			$_POST['cdsweblogin'], 
			$_POST['cdswebsenha'], 
			$_POST['odbclogin'], 
			$_POST['odbcsenha'], 
			$_POST['servidor']
		);

		header('location: /IMPLANTACAO/Cad_cliente.php');
		die();

	}
?>

<body>
	
<div id='div_principal'>
	<div class='efeito'>
		<h1>Cadastro de Cliente</h1>
	</div>
	<div class="container">
		<form class='cadastro' method='post' action="Cad_cliente.php">
			<div>
				<label for="fname">Fantasia:</label><br>
				<input type="text" id="fantasia" name="fantasia" ><br><br>
				<label for="fname">CDSWEB Login:</label><br>
				<input type="text" id="cdsweblogin" name="cdsweblogin" ><br><br>
			</div>
			<div>
				<label for="lname">CDSWEB Senha:</label><br>
				<input type="text" id="cdswebsenha" name="cdswebsenha" ><br><br>
				<label for="lname">ODBC Login:</label><br>
				<input type="text" id="odbclogin" name="odbclogin" ><br><br>
			</div>
			<div>				
				<label for="lname">ODBC Senha:</label><br> 
				<input type="text" id="odbcsenha" name="odbcsenha" ><br><br>
				<label for="lname">Servidor:</label><br>
				<select name="servidor" id="servidor">
					<option value="63.143.45.98,4503">63.143.45.98,4503</option>
					<option value="74.63.213.142,4502">74.63.213.142,4502</option>
					<option value="138.128.173.162,4500">138.128.173.162,4500</option>
				</select>
				<!-- <input type="text" id="servidor" name="servidor" ><br><br> -->
			</div>
			<div class='submit'>
				<input type="submit" value="Salvar">
			</div>
		</form> 
	</div>
</div>


</body>

<?php
        include __DIR__ . '/footer.html';
?>