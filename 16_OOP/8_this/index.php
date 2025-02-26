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
};

$kako = new Animal;
$kako->pickName('Kako');