<?php
session_start();
session_destroy();
header('Location: clienteCDSWEB.php');
?>