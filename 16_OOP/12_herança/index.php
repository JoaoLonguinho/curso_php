<?php

class Pessoa {
    public $idade = 27;
    public function falar(){
        echo "Olá Mundo! <br/>";
    }
    private function gritar(){
        echo "Programar é muito boooom <br/>"; // Método não acessável por ser privado
    }

    public function acessaGritar(){ // como acessar o método gritar que está privado
        return $this->gritar();
    }

    protected function falarBaixo(){
        echo "ei, psiu, você ai";
    }

    public function acessaFalarBaixo(){
        return $this->falarBaixo();
    }
    
}

class Programador extends Pessoa{

    public function acessaFalarBaixoProgramador(){ #Protected permite que herdemos o método definido na classe pai
        return $this->falarBaixo();
    }
}

$bianca = new Pessoa;

$bianca->falar();

$bianca->acessaGritar();

$bianca->acessaFalarBaixo();  

$joao = new Programador;

$joao->falar();
echo $joao->idade . "<br/>";

$joao->acessaGritar();

$joao->acessaFalarBaixoProgramador();