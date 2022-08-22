<?php
	require __DIR__.'/header.php';
    require __DIR__.'/config.php';
    require __DIR__.'/src/usuario.php';

    $usuarios = new Usuario($mysql);
    $usuarios = $usuarios->showAll();

   
?>


<body>
    <div id='div_principal'>
        
        <div class='efeito'>
            <h1>Usuarios</h1>
        </div>

        <table id="customers">
            <tr>
                <th id='coluna'><a class="button" href="cadUsuario.php"><img id='btn-novo' src="./img/mais.png" alt="adicionar"></a></th>
                <th>Usuario</th>
            </tr>

            <?php 
            foreach($usuarios as $usuario):?>
            <tr>
                <td><a class="button" href="/IMPLANTACAO/excluiUsuario.php?id=<?= $usuario['id']?>"><img id="btn-exclui" src="./img/bloquear.png" alt="exclui"></a></td>
                <td><?= $usuario['usuario']?></td>
            </tr>
            <?php endforeach ?>
        </table>

    </div>
    <?php
			include __DIR__ . '/footer.html';
    ?>
</body>
