<?php

abstract class Pessoa {
    public static function falar(){
        echo "Oie<br/>";
    }
}



Pessoa::falar(); // para poder utilizar desta forma, precisamos atribuir o static na function

abstract class Carro {
    abstract public function acelerar();
}

class Fiat extends Carro{
    public function acelerar(){
        echo "Vrummm <br/>";
    }
}


$palio = new Fiat;
$palio->acelerar();
$palio->acelerar();
$palio->acelerar();
$palio->acelerar();
$palio->acelerar();
$palio->acelerar();
$palio->acelerar();