<?php

$i = 0;
while($i < 10){

    echo "primeiro loop interno " . $i . "<br/>";

    $j = 0;
    while($j < 5){
        echo "segundo loop interno ".  $j . "<br/>";
        $j++;
    }
    
    $i++;
}