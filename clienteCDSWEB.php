<?php
	session_start();
	require __DIR__.'/header.php';
    require __DIR__.'/config.php';
    require __DIR__.'/src/CLiente.php';

    $clientes = new Cliente($mysql);
    $clientes = $clientes->showAll();

   
?>


<body>
    <div id='div_principal'>
        
        <div class="efeito">
            <div class="page">
                <div class="tittle">
                    <h1>Clientes CDS WEB</h1>
                    <p>Olá, <?php echo ucfirst($_SESSION['usuario'])?>!</p>
                    <p><a id='saivolta' href="logout.php">Sair</a></p>
                </div>
                <table id="customers">
                    <tr>
                        <th id='coluna'><a class="button" 
                            <?php if($_SESSION['permissao'] == 1){?> 
                                    href="cadCliente.php" 
                                    <?php } else { ?> 
                                    href="erroPermissao.php" <?php } ?> ><img id='btn-novo' src="./img/mais.png" alt="adicionar"></a></th>
                        <th>Cliente</th>
                        <th>CDSWEB Login</th>
                        <th>CDSWEB Senha</th>
                        <th>ODBC Login</th>
                        <th>ODBC Senha</th>
                        <th>Servidor</th>
                    </tr>
                    <?php 
                    foreach($clientes as $cliente):?>
                    <tr>
                        <td><a class="button" 
                        <?php if($_SESSION['permissao'] == 1){?>
                        href="excluiCliente.php?id=<?= $cliente['id']?>"
                        <?php } else { ?>
                        href="erroPermissao.php" <?php } ?> 
                        ><img id="btn-exclui" src="./img/bloquear.png" alt="exclui"></a></td>
                        <td><?= $cliente['fantasia']?></td>
                        <td><?= $cliente['cdsweblogin']?></td>
                        <td><?= $cliente['cdswebsenha']?></td>
                        <td><?= $cliente['odbclogin']?></td>
                        <td><?= $cliente['odbcsenha']?></td>
                        <td><?= $cliente['servidor']?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>



    </div>

</body>
