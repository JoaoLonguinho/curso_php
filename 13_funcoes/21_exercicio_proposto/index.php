<?php

function sumDigits($num){
    $numSeparated = array_map('intval', str_split($num));
    $sum = 0;
    foreach($numSeparated as $nums){
        $sum += $nums;
    }
    return $sum;
}

echo sumDigits(128);