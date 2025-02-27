<?php

class Humano {
    public $nome;
    public $idade;
    protected function falar(){
        echo $this->nome . " tem " . $this->idade . " anos de idade";
    }
}

class Professor extends Humano {
    public $materia;
    public function getFalar(){
        return $this->falar();
    }
}

$Giovanni = new Professor;

$Giovanni->nome = "Giovanni";
$Giovanni->idade = 32;

$Giovanni->getFalar();