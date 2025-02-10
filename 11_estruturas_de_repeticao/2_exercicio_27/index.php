<?php

$itens = ['João', 27, "Dev", 10.00, "Bianca", 24, "Chandelier", 290.000, "Unhas", 30];
$counter = 0;

while ($counter < sizeof($itens)){

    if(is_string($itens[$counter])){
        echo $itens[$counter] . "<br/>";
    }

    $counter++;
}