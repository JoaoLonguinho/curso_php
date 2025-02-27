<?php

class Humano {
    public $nome;
    public $idade;
    protected function falar($materia){
        echo $this->nome . " tem " . $this->idade . " anos de idade e ensino " . $materia;
    }
}

class Professor extends Humano {
    public $materia;
    public function getFalar($materia){
        return $this->falar($materia);
    }
}

$Giovanni = new Professor;
$Giovanni->nome = "Giovanni";
$Giovanni->idade = 32;
$Giovanni->materia = "Geografia";

$Giovanni->getFalar($Giovanni->materia);