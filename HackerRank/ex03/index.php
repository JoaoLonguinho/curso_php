<?php

function aVeryBigSum($ar){
    $long = 0;
    foreach($ar as $numbers){
        $long += $numbers;
    }
    return $long;
}

echo aVeryBigSum([5, 10000001, 10000002, 10000003, 10000004, 10000005]);