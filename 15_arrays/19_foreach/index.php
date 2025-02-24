<?php

$joao = [
    "Nome" => "João",
    "Sobrenome" => "Pedro",
    "Idade" => 27
];

$bianca = [
    "Nome" => "Bianca",
    "Sobrenome" => "Luiz",
    "Idade" => 24
];

foreach($joao as $char => $value){
    echo "$char : $value <br/>";
}
foreach($bianca as $char => $value){
    echo "$char: $value <br/>";
}