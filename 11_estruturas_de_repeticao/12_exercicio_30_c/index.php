<?php

$arr = [];

for($c = 10; $c <= 20; $c++){
    if(!($c % 2 == 0)){
        array_push($arr, $c);
    }
}
print_r($arr);