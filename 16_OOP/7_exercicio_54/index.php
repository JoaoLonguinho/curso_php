<?php

class Pessoa{
    public $nome = "Sem nome";
    public $idade = 0;
    function andar($kms){
        echo "$this->nome andou por $kms Kms <br/>";
    }
};

$joao = new Pessoa;
$joao->nome = "João";
echo $joao->nome . "<br/>";
$joao->idade = 27;
echo $joao->idade . "<br/>";
$joao->andar(5);


$bianca = new Pessoa;
$bianca->nome = "Bianca";
$bianca->idade = 24;
echo $bianca->nome . "<br/>"; 
echo $bianca->idade . "<br/>";
$bianca->andar(10);