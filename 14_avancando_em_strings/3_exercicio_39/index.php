<?php

function moreThanTen($items){
    
    $itensCaros = [];

    foreach($items as $value => $preco){
        if($preco > 10){
            array_push($itensCaros, $value);
        }
    }
    return $itensCaros;

}
print_r(moreThanTen(["sofá" => 600, "caneta" => 1, "cafeteira" => 200]));