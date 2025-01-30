<?php

$carro = [
"marca" => "Fiat", 
"modelo" => "Uno", 
"ano" => 2008
];

print_r($carro['marca']);
echo "<br/>";
echo $carro['modelo'];
echo "<br/>";
print_r($carro);

$marca = $carro["marca"]; #criando a variavel a partir de um dado do array