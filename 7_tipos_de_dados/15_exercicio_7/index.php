<?php

$pessoa = [
    "nome" => "João",
    "idade" => 27,
    "cargo" => "Desenvolvedor"
];

$idade = $pessoa["idade"];

if($idade >= 18){
    echo "você tem $idade, então pode entrar";
}