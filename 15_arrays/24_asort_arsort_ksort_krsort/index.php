<?php

$pessoas = [
    "joao" => 27,
    "bianca" => 23
];

asort($pessoas); 

print_r($pessoas);

echo "<br/>";

arsort($pessoas);

print_r($pessoas);
echo "<br/>";

ksort($pessoas); #ordenando pelas chaves

print_r($pessoas);
echo "<br/>";
krsort($pessoas);

print_r($pessoas);
echo "<br/>";