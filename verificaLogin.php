<?php
if(!$_SESSION['usuario']){
    header('Location: clienteCDSWEB.php');
    exit;
}