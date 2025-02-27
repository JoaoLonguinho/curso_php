<?php

class Car {
    public $rodas = 4;
    private $vidro = "Temperado";

    public function getVidro(){
        return $this->vidro;
    }
    
}

class Mecanico {
    public function alterarRodas($obj){
        $obj->rodas = 10;
    }
    public function trocaVidro($obj, $estilo){
        $obj->vidro = $estilo;
    }
}
$fiat = new Car;

echo $fiat->rodas . "<br/>";

$joao = new Mecanico;

$joao->alterarRodas($fiat);

echo $fiat->rodas . "<br/>";

// $joao->trocaVidro($fiat, "Sem película"); #Não acessa pois a propriedade é privada 

// echo $fiat->vidro . "<br/>";

echo $fiat->getVidro();

