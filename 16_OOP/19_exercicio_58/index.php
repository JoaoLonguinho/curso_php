<?php

class Cachorro {
    public $nome;
    public $raca;
    public $cor;

    function __construct($nome, $raca, $cor){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->cor = $cor;
    }
}

$tika = new Cachorro("Tika", "Vira-lata", "Amarelo");

$kako = new Cachorro("Kako", "Vira-lata", "Marrom");

$thor = new Cachorro("Thor", "Shih Tzu", "Marrom e Branco");

echo "João teve a $tika->nome e o $kako->nome, os dois eram da raça '$tika->raca', a $tika->nome tinha pelos em $tika->cor, e o $kako->nome tinha pelos na cor $kako->cor. Hoje João só tem um cachorro, que é o $thor->nome, é da raça '$thor->raca' e tem pelos nas cores $thor->cor. <br/>";