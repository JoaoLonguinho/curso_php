<?php

class Carro {
    public $marca;
    public $cor;
    public $ano;
    public $velocidadeMaxima;
    function setVelocidadeMaxima($velMax){
        $this->velocidadeMaxima = $velMax;
        return $this->velocidadeMaxima;
    }
    function getVelocidadeMaxima(){
        echo $this->velocidadeMaxima . "<br/>";
    }
}

$palio = new Carro;
$palio->setVelocidadeMaxima(120);
$palio->getVelocidadeMaxima();
$palio->setVelocidadeMaxima(150);
$palio->getVelocidadeMaxima();