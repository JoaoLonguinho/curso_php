<?php

$a = (int) "12";

echo $a . "<br/>";
echo $a + 10 . "<br/>";
echo gettype($a);
echo "<br/>";
if($a === 12){
    echo "A é identico a 12";
}

$b = (float) "3.21239";

if($b === 3.21239){
    echo "<br/>";
    echo "funcionou";
    echo gettype($b);
}