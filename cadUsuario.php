<?php
	require __DIR__.'/header.php';
	require __DIR__.'/src/usuario.php';


	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$cliente = new Usuario($mysql);
		$cliente->inserir(
			$_POST['usuario'], 
			$_POST['senha']
		);

		header('location: cadUsuario.php');
		die();

	}
?>

<body>
	
<div id='div_principal'>
	<div class='efeito'>
		<h1>Cadastro de Usuario</h1>
	</div>
	<div class="container">
		<form class='cadastro' method='post' action="cadUsuario.php">
			<div>
				<label for="fname">Usuario:</label><br>
				<input type="text" id="usuario" name="usuario" ><br><br>
				<label for="fname">Senha:</label><br>
				<input type="password" id="senha" name="senha" ><br><br>
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