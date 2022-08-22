<?php

class Usuario 
{

    private $mysql;
    private string $nome;

    public function __construct(mysqli $mysql)
    {

        $this->mysql = $mysql;
        
    }

    public function showAll():array
    {

        $result = $this->mysql->query("SELECT usuario,senha FROM usuario;");

        return $showAll = $result->fetch_all(MYSQLI_ASSOC);

    }

    public function inserir(string $usuario, $senha):void
    {

        $inserir = $this->mysql->prepare("INSERT INTO usuario (usuario,senha) VALUES (?,?)");
        
        $inserir->bind_param('ss', $usuario, $senha);

        $inserir->execute();

    }

    public function delete(string $id):void
    {
        $delete = $this->mysql->prepare('DELETE FROM usuario WHERE id=?');

        $delete->bind_param('s',$id);

        $delete->execute();
    }

}