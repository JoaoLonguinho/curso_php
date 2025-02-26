<?php

class Game{
    public $name = "Dark souls";
    function desc(){
        echo "$this->name é um jogo de ação e RPG";
    }
};


$darkSouls = new Game;
$darkSouls->desc();

echo "<br/>";

class Animal{
    public $name;
    function pickName($nome){
        $this->name = $nome;
        echo $this->name;
    }
    function latir(){
        return "Au au auuuu";
    }
    function latirForte(){
        return strtoupper($this->latir());
    }
};

$kako = new Animal;
$kako->pickName('Kako');
echo "<br/>";
echo $kako->latirForte();