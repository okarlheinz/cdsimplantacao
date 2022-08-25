<?php
if(!$_SESSION['usuario'] ){
    header('Location: index.php');
    exit;
} 

// || $_SESSION['permissao'] == 0