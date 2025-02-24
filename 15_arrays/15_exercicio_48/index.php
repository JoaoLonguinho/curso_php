<?php

$alimentos = ["batata", "maçã", "pera", "feijão", "arroz"];

$removidos = array_splice($alimentos, 2, 2);

print_r($alimentos);
echo "<br>";
print_r($removidos);
