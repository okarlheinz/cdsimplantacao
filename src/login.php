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
       
        $query = "SELECT idusuario, usuario, admin FROM usuario WHERE usuario = '{$usuario}' AND senha='{$senha}'";

        $result = $this->mysql->query($query); //executando a query

        $queryresult = $result->fetch_row(); //guardando o resultado na variavel queryresult

        $row = $result->num_rows; //contando a quantidade de linhas

        // $row = count($result->fetch_all(MYSQLI_ASSOC)); metodo antigo para contagens de linha. DEixei salvo caso precise

        // echo $queryresult[2];
        // die;

        
        
        if($row == 1)
        {
            $_SESSION['permissao'] = $queryresult[2];
            $_SESSION['usuario'] = $usuario;

            header('Location: ./clienteCDSWEB.php');

        } else {
            header('Location: ./clienteCDSWEB.php' );
            exit();
        }             
    }
}