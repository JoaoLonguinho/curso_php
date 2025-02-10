<?php

$a = 0;
while($a < 10){
    if($a == 5){
        $a++;
        continue;
    }
    echo "$a <br/>";
    $a++;
}