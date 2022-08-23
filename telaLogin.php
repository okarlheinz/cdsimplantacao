<?php
	session_start();
	require __DIR__.'/header.php';
	require __DIR__.'/src/login.php';


	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$login = new Login($mysql);
		$login->logar(
			$_POST['usuario'], 
			$_POST['senha']
		);

		// header('location: /cadCliente.php');
		// die();
	}
?>

	<body>

		<div id='div_principal'>
			<div class="efeito">
				<div class="container">

					<h1>Login</h1>	

					<p>Faça o login para continuar</p>

					<form action="telaLogin.php" method='POST'>
						<div class="div-login">

							<label for="login">Login:</label>
							<input name='usuario' type="text" placeholder="login">

							<label for="senha">Senha:</label>
							<input name='senha' type="password" placeholder="senha"><br>
							<input type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>


		<?php
			include __DIR__ . '/footer.html';
		?>

	</body>

</html>