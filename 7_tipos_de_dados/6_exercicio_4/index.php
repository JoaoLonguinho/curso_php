<?php

$a = 2.5;
$b = 8237.23;
$c = -128.12; #É possível ter floats negativos
$d = 'João';

if(is_float($c)){
    echo 'é float';
}
else{
    echo 'é outro tipo de dado';
}