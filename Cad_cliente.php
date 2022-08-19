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

		<form method='post' action="Cad_cliente.php">
			<div>
				<label for="fname">Fantasia:</label><br>
				<input type="text" id="fantasia" name="fantasia" ><br><br>
			</div>
			<div>
				<label for="fname">CDSWEB Login:</label><br>
				<input type="text" id="cdsweblogin" name="cdsweblogin" ><br><br>
			</div>
			<div>
				<label for="lname">CDSWEB Senha:</label><br>
				<input type="text" id="cdswebsenha" name="cdswebsenha" ><br><br>
			</div>
			<div>	
				<label for="lname">ODBC Login:</label><br>
				<input type="text" id="odbclogin" name="odbclogin" ><br><br>
			</div>
			<div>
				<label for="lname">ODBC Senha:</label><br>
				<input type="text" id="odbcsenha" name="odbcsenha" ><br><br>
			</div>
			<div>
				<label for="lname">Servidor:</label><br>
				<input type="text" id="servidor" name="servidor" ><br><br>
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
		</form> 
	</div>
</div>


</body>

<?php
        include __DIR__ . '/footer.html';
?>