<?php

trait PlacaMae {
    public function conectar(){
        echo "Conectando todos os componentes...";
    }
}

class Gabinete {
    use PlacaMae;
}

$pc = new Gabinete;

$pc->conectar();