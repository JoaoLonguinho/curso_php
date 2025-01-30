<?php

$nome = "João";
$numero = 53;

if(is_string($nome)){
    echo "$nome é uma string<br/>";
}

if(is_string($numero)){
    echo "$numero não é uma string";
}

if(is_string("aushuas")){
    echo "é uma string<br/>";
}
