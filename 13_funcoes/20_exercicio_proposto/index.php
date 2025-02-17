<?php

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    if ($num == 2) { 
        return true;
    }
    if ($num % 2 == 0) { 
        return false;
    }

    for ($i = 3; $i * $i <= $num; $i += 2) { 
        if ($num % $i == 0) {
            return false;
        }
    }
    
    return true;
}


var_dump(isPrime(1)); 
var_dump(isPrime(2)); 
var_dump(isPrime(3)); 
var_dump(isPrime(4)); 
var_dump(isPrime(29)); 

?>
