<?php

$arr = ["Carro" => "Vermelho", "Blusa" => "Azul", "Caneca" => "Branca", "Garrafa" => "Verde"];

$chaves = array_keys($arr);

$valores = array_values($arr);

print_r($chaves);
echo "<br/>";
print_r($valores);