<?php

$pessoa = new class(){
    public $nome = "João";
    public $idade;

    function falar(){
        echo "Olá, eu sou o $this->nome";
    }
};

$pessoa->idade = 27;

echo $pessoa->idade;

echo "<br/>";

$pessoa->falar();