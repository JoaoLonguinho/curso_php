<?php

function soma($n1, $n2){
    return $n1 + $n2 . "<br/>";
};

echo soma(5,12);

$x = soma(2,4);

echo $x;

function testeReturn(){
    return "Testando";
}

$s = testeReturn();

echo $s;