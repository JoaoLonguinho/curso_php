<?php

$arr = range(10, 45);

for($i = 0; $i < count($arr); $i++){
    $arr[$i] += 6;
    if($arr[$i] > 30){
        echo "O número $arr[$i] é muito alto <br/>";
    }
    else{
        echo "Número: $arr[$i] <br/>";
    }
}