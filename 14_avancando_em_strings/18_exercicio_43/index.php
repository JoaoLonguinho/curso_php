<?php

$str = "carro - navio - helicóptero - barco - jangada";

$arr = explode("-", $str);

foreach($arr as $items){
    echo $items . "<br/>";
}