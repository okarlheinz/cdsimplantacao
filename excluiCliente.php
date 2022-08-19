<?php
	require __DIR__.'/header.php';
    require __DIR__.'/config.php';
    require __DIR__.'/src/CLiente.php';

    
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$cliente = new Cliente($mysql);
		$cliente->delete(
			$_POST['id']
		);

		header('location: /IMPLANTACAO/clienteCDSWEB.php');
		die();

	}

?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o artigo?</h1>
        <form method="post" action="excluiCliente.php">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
                <button class="botao">Excluir</button>
            </p>
        </form>
    </div>
</body>

</html>