<?php

class Cliente 
{

    private $mysql;
    private string $nome;

    public function __construct(mysqli $mysql)
    {

        $this->mysql = $mysql;
        
    }

    public function showAll():array
    {

        $result = $this->mysql->query("SELECT id,fantasia,cdsweblogin,cdswebsenha,odbclogin,odbcsenha,servidor FROM cliente");

        return $showAll = $result->fetch_all(MYSQLI_ASSOC);

    }

    public function inserir(string $fantasia, $cdsweblogin, $cdswebsenha, $odbclogin, $odbcsenha, $servidor):void
    {

        $inserir = $this->mysql->prepare("INSERT INTO cliente (fantasia,cdsweblogin,cdswebsenha,odbclogin,odbcsenha,servidor) VALUES (?,?,?,?,?,?)");
        
        $inserir->bind_param('ssssss', $fantasia, $cdsweblogin, $cdswebsenha, $odbclogin, $odbcsenha, $servidor);

        $inserir->execute();

    }

    public function delete(string $id):void
    {
        $delete = $this->mysql->prepare('DELETE FROM cliente WHERE id=?');

        $delete->bind_param('s',$id);

        $delete->execute();
    }

}