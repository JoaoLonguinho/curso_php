<?php

interface Console {

    const NOME = "Sarai";
    public function ligar();
}


class Jogo implements Console {
    public $nome = "Sonic";
    public function brandScreen(){
        echo "Ligando o console " . self::NOME . "...<br/>";
    }
    public function ligar(){
        echo "Compilando shaders..." . "<br/>";
    }
}

$sonic = new Jogo;
$sonic->brandScreen();
$sonic->ligar();