<?php

class Pessoa 
{

    private string $nome;
    private $rg;

    public function __construct(string $nome)
    {

        $this->nome = $nome;
        
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}