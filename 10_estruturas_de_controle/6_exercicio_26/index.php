<?php

$a = 78;
$b = 3;
$c = "João";
$e =  "Longuinho";


function verificaNumero($num){
    if(is_int($num)){
        $d = $num * 2;
        if($d > 100){
            echo "O número é maior que 100<br/>";       
        }
        else {
            echo "O número é menor que 100<br/>";
       }
    }
    else {
        echo "Não é um inteiro <br/>";
    }
}

verificaNumero($a);
verificaNumero($b);
verificaNumero($c);
verificaNumero($e);