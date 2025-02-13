<?php

function sumEvenNumbers($num){
    $total = 0;
    for($i = 0; $i <= $num; $i++){
        if($i % 2 == 0){
            $total += $i;
        }
    }
    return $total;
}

