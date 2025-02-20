<?php

$phrase = "O rato roeu a roupa do rei de roma";

function findTheAs($string){
    $counter = 0;
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] === "a"){
            $counter++;
        }
    }
    return $counter;
}

echo findTheAs($phrase);