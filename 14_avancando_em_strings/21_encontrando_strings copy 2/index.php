<?php

$str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar . "<br/>";

$testeEncontrar2 = strpos($str, "Java");

echo $testeEncontrar2;

if($testeEncontrar2 == false){
    echo "Sem esta palavra";
}