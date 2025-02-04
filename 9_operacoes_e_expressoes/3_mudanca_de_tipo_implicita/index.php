<?php

echo 5/2;
echo "<br/>";
if(is_float(5/2)){
    echo "É um float";
}
echo 2 . 4;
echo "<br/>";

if(is_string(2 . 4)){
    echo "É uma string";
}

$nome = "João";
$sobrenome = "Longuinho";
echo "<br/>";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br/>";