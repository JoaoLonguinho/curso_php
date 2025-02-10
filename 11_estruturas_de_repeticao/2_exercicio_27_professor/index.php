<?php

$itens = ['João', 27, "Dev", 10.00, "Bianca", 24, "Chandelier", 290.000, "Unhas", 30];
$counter = count($itens);

$x = 0;

while ($x < $counter){
    if(is_string($itens[$x])){
        echo $itens[$x] . "<br/>";
    }

    $x++;
}