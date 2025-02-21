<?php

$str = "Isso é um pequeno teste para ver a funcionalidade do strstr."; 

$resto = strstr($str, "pequeno"); #Mostra o resto da string, após a palavra mencionada.

if($resto == false){
    echo "nenhuma palavra encontrada.";
}

echo $resto;