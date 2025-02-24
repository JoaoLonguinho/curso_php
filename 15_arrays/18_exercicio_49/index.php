<?php

$nome = "Thor";
$tamanho = "Pequeno";
$idade = 0.11;
$humor = "Travesso";

$arr = compact("nome", "tamanho", "idade", "humor");

foreach($arr as $caracteristica => $value){
    echo $caracteristica . ": " . $value . "<br/>";
}