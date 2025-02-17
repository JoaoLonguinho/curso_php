<?php

$arr = ["Sucrilhos", "Manteiga", "Refrigerante"];

$itensInPhrase = implode(", ", $arr);

echo $itensInPhrase;
echo "<br/>";

$lista = ["banana", "arroz", "papel higienico", "maçã"];

function showItems($shopCart){
    $boughtItems = "Você comprou os seguintes itens: ";
    for($i = 0; $i < count($shopCart); $i++){
        if($i + 1 === count($shopCart)){
            $boughtItems .= $shopCart[$i] . ".";
        }
        else{
            $boughtItems .= $shopCart[$i] . ", ";
        }
    }
    return $boughtItems;
}

echo showItems($lista);