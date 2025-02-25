<?php

class Car{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "preto";
    function Ligar(){
        echo "Vrummm<br/>";
    }
}

$palio = new Car;

echo $palio->rodas . " rodas <br/>";
$palio->cor = "cinza"; #sobreescrevendo a cor predefinida
echo $palio->cor . "<br/>";
for($i = 0; $i < 3; $i++){
    $palio->ligar();
}