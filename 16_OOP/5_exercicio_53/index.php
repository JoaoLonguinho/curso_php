<?php

class Cachorro{
    function latir(){
        echo "au au <br/>";
    }
    function andar($metros){
        echo "O cachorro andou $metros metros<br/>";
    }
}

$kako = new Cachorro;
$kako->latir();
$kako->andar(230);
$thor = new Cachorro;
$thor->latir();
$thor->andar(100);