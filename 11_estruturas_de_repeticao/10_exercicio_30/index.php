<?php

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];


for($counter = 0; $counter < count($arr); $counter++){
    if($arr[$counter] % 2 == 0){
        echo "Você está na posição $counter, com o valor $arr[$counter] <br/>";
    }
}