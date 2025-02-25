<?php

$arr = [
    11,
    22,
    53,
    212,
    32,
    53,
    54,
    153
];

function soma($a, $b){
    return $a + $b;
};

$resultado = array_reduce($arr, "soma");

echo $resultado . "<br/>";

$frase = [
    "Olá",
    "sou",
    "o",
    "João."
];

function concact($i, $j){
    return $full = $i . " " . $j;
};

$concactRes = array_reduce($frase, "concact");

echo $concactRes;