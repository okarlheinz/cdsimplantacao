<?php
	session_start();
	include ('verificaLogin.php');
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

		header('location: /cadCliente.php');
		die();

	}
?>

<body>
	
<div id='div_principal'>
	<div class='efeito'>
		<h1>Cadastro de Cliente</h1>
		<p>Olá <?php echo ucfirst($_SESSION['usuario'])?>!</p>
		<p><a href="logout.php">Sair</a></p>
	</div>
	<div class="container">
		<form class='cadastro' method='post' action="cadCliente.php">
			<div>
				<label for="fname">Fantasia:</label>
				<input type="text" id="fantasia" name="fantasia" placeholder='Digite o nome do cliente'>
			</div>
			<div>
				<label for="fname">CDSWEB Login:</label>
				<input type="text" id="cdsweblogin" name="cdsweblogin" placeholder='Digite o login do CDSWEB'>
			</div>
			<div>
				<label for="lname">CDSWEB Senha:</label>
				<input type="text" id="cdswebsenha" name="cdswebsenha" placeholder='Digite a senha do CDSWEB'>
			</div>
			<div>
				<label for="lname">ODBC Login:</label>
				<input type="text" id="odbclogin" name="odbclogin" placeholder='Digite o user da ODBC'>
			</div>
			<div>			
				<label for="lname">ODBC Senha:</label> 
				<input type="text" id="odbcsenha" name="odbcsenha" placeholder='Digite a senha da ODBC'>
			</div>
			<div>
				<label for="lname">Servidor:</label>
				<select name="servidor" id="servidor">
					<option value="63.143.45.98,4503">63.143.45.98,4503</option>
					<option value="74.63.213.142,4502">74.63.213.142,4502</option>
					<option value="138.128.173.162,4500">138.128.173.162,4500</option>
				</select>
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