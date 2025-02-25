<?php

$arr1 = [1,2,3];
$arr2 = [2,4,6];

$diff = array_diff($arr1, $arr2); #do array 1 para o array 2

print_r($diff);

echo "<br/>";

$diff2 = array_diff($arr2, $arr1); #do array 2 para o array 1

print_r($diff2);