<?php

function encontrarPares($arr){
    $arrPares = [];
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] % 2 == 0){
                array_push($arrPares, $arr[$i]);
            }
        }
    return $arrPares;
};

print_r(encontrarPares([2,56,1,3,6]));