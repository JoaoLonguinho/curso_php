<?php

/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */

$ar = [1,2,3,4,5,6];

function simpleArraySum($ar) {
    // Write your code here
    $sum = 0;
    foreach($ar as $item){
        $sum += $item;
    }
    return $sum;
}

echo simpleArraySum($ar);