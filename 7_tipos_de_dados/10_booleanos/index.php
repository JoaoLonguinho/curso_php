<?php

echo true; #não é usado assim na maioria dos casos
echo "<br>";
echo false;

if(true){
    echo 'é verdadeiro <br/>';
}

if(5>2){
    echo 'é verdadeiro <br/>'; #o if gera o mesmo resultado da condição do if de cima (true)
}

$podeEntrar = true;

if($podeEntrar){
    echo "O usuário pode entrar";
}
