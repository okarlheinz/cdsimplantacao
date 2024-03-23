<?php

    require __DIR__.'/config.php';

?>

<DOCTYPE html>
	<html lang='pt-br'>
        <head>
            <meta charset="utf-8">
            <title>CDS Sistemas</title>
            <link rel="stylesheet" type="text/css" href="./css/style.css">
            <link rel="shortcut icon" href="./img/favicon.ico" type="image/ico" />
		</head>

            <header>		
                <div class="container">
                    <div id="logo">
                        <a href="index.php"><img src="./img/cds_logo.png"></a>
                    </div>
    
                    <div id="menu">
                        <a href="Downloads.php">Downloads</a>
                        <a <?php if(!empty($_SESSION)){
                            ?> href="clienteCDSWEB.php" 
                            <?php } else { ?> 
                            href="telaLogin.php" <?php } ?> >ClienteCDSWEB
                        </a>
                        <a href="canal.php">Implantação</a>
                        <a href="http://198.49.71.152:800/mantisbt" target="_blank" rel="noopener noreferrer">Mantis</a>
                        <a href="https://helpdesk.servhost.com.br/" target="_blank" rel="noopener noreferrer">HelpDesk</a>
                        <a href="https://www.youtube.com/channel/UCTovPDfm2UFMDi58vSJpopA" target="_blank" rel="noopener noreferrer">Nosso Canal</a>
                        <a href="https://quefaco.webnode.com.br/" target="_blank" rel="noopener noreferrer">QueFaco</a>
                        <a href="https://webmail-seguro.com.br/cdssistemas.com.br/" target="_blank" rel="noopener noreferrer">Webmail</a>
                    </div>
                    
                </div>
            </header>

           

    