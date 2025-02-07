<?php

$nome = "João";
$idade = 27;
$saldo = 10.50;
$hobbes = [
    "jogar",
    "sair",
    "viajar"
];

$msg = "É um inteiro";
$msgNegative = "não é um inteiro";

if(gettype($nome) == 'integer'){
    echo $msg . "<br/>";
}
else {
    echo $msgNegative . "<br/>";
}
if(gettype($idade) == 'integer'){
    echo $msg . "<br/>";
}
else {
    echo $msgNegative . "<br/>";
}
if(gettype($saldo) == 'integer'){
    echo $msg . "<br/>";
}
else {
    echo $msgNegative . "<br/>";
}
if(gettype($hobbes) == 'integer'){
    echo $msg . "<br/>";
}
else {
    echo $msgNegative . "<br/>";
}

#também funciona assim: 

if(is_int($nome)){
    echo $msg . "<br/>";
}
else {
    echo $msgNegative . "<br/>";
}