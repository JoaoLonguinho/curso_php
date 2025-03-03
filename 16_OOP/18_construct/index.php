<?php

class Pessoa {
    public $nome;
    public $idade;
    public $profissao;

    function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }
}

$joao = new Pessoa("João", 27, "Dev");

echo "Olá, eu sou o $joao->nome, tenho $joao->idade e sou $joao->profissao <br/>";