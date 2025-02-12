<?php

/*function arrGen($n1, $n2, $n3){
    return [$n1, $n2, $n3];
}

$a = arrGen(23,131,44);

print_r($a);*/

$arr = [];


for($i = 0; $i <= 30; $i++){
       array_push($arr, $i);
}


function arrayMaiorQueSete($array){

    $arrayRetorno = [];
    for($j = 0; $j < count($array); $j++){
        if($array[$j] > 7){
            array_push($arrayRetorno, $array[$j]);
        }
    }
    return $arrayRetorno;
}

$novoArr = arrayMaiorQueSete($arr);
print_r($novoArr);