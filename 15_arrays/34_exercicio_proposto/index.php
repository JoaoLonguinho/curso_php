<?php

function ordenarNumeros($arr){
    sort($arr);
    return $arr;
};

print_r(ordenarNumeros([2,5,1,49,2,50,2]));