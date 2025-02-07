<?php

function compararNumeros($a, $b){
    if($a > $b){
        echo "O primeiro número é maior";
    }
    else if($a < $b){
        echo "O segundo número é maior";
    }
    else if($a == $b){
        echo "Os números são iguais";
    }
    else{
        echo 'Erro';
    }
}

compararNumeros(22, 22);