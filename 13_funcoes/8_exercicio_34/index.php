<?php

function checkEvenOdd($number){
    if($number % 2 == 0){
        echo "O número $number é Par <br/>";
    }
    else{
        echo "O número $number é Impar <br/>";
    }
}
for($a = 0; $a <= 10; $a++){
    checkEvenOdd($a);
}