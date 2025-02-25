<?php

class Pessoa {
    function falar($fala){
        echo $fala . "<br/>";
    }
}

$joao = new Pessoa;
$joao->falar("Oie");
$pedro = new Pessoa;
$pedro->falar("Fala pessoal");