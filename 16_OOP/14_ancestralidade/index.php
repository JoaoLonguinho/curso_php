<?php

class Jogo {
    public $categoria = "action";
    public $ranking = 1;
}

class Animal {
    public $tipo;
    public $raça;
}

class MiniGame extends Jogo{
    public $quantidadeJogadores = 4;
}

$darkSouls = new Jogo;

$cachorro = new Animal;

$pinball = new MiniGame;

if($cachorro instanceof Jogo){
    echo "Kako é um jogo<br/>";
}
else{
    echo "Kako não é um jogo <br/>";
}

if($darkSouls instanceof Jogo){
    echo "Dark souls é uma instancia de jogo<br/>";
}
else{
    echo "Dark souls não é um jogo<br/>";
}

echo $pinball->categoria . "<br/>";

if($pinball instanceof Jogo){
    echo "Pinball é um jogo<br/>";
}
else{
    echo "Pinball não é um jogo <br/>";
}

if($pinball instanceof MiniGame){
    echo "Pinball é um MiniGame<br/>";
}
else{
    echo "Pinball não é um MiniGame <br/>";
}

if($cachorro instanceof MiniGame){
    echo "Kako é um jogo<br/>";
}
else{
    echo "Kako não é um jogo <br/>";
}