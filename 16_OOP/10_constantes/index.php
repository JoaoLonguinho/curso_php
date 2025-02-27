<?php

class Humano {
    public const OLHOS = 2; #declaração sem $ e em maiuscula.
    function ver(){
        echo "João está usando seus " . self::OLHOS . " olhos para ver<br/>";
    }
}

$joao = new Humano;

echo "João tem " . $joao::OLHOS . " Olhos <br/>";
$joao->ver();