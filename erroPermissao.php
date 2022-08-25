<?php
    session_start();
    include('verificaLogin.php');
	require __DIR__.'/header.php';
    require __DIR__.'/config.php';
    require __DIR__.'/src/CLiente.php';

?>

<body>
    <div id='div_principal'>
        
        <div class='efeito'>
            <h1>Clientes CDS WEB</h1>
            <p>Desculpe, <?php echo ucfirst($_SESSION['usuario'])?>, você não tem permissão.</p>
            <p>Entre em contato com um administrador do sistema!</p>
            <p>
                <a id='saivolta' href="logout.php">Sair</a>
                <a id='saivolta' href="clienteCDSWEB.php">Voltar</a>
            </p>
        </div>
    </div>
</body>