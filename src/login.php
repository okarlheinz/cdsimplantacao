<?php

class Login 
{

    private $mysql;


    public function __construct(mysqli $mysql)
    {

        $this->mysql = $mysql;

    }
    
    public function logar($usuario, $senha):array
    {

        if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: ../index.php');
        exit();
        }
       
        $query = "SELECT idusuario, usuario FROM usuario WHERE usuario = '{$usuario}' AND senha='{$senha}'";

        $result = $this->mysql->query($query);

        $row = count($result->fetch_all(MYSQLI_ASSOC));

        // echo json_encode($showAll);
        // die;

        if($row == 1)
        {
            $_SESSION['usuario'] = $usuario;
            header('Location: ../cadCliente.php');
            exit();
        } else {
            header('Location: ../clienteCDSWEB.php' );
            exit();
        }             
    }
}