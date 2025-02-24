<?php

// resgatar elementos = Slice
// Remover elementos = Splice

$arr = [1,2,3,4,5,6,7,8,9,10,11];

$removedItens = array_splice($arr, 1, 2);

print_r($arr); #Array sem os itens removidos.
echo "<br/>";
print_r($removedItens); #Array com os itens que foram removidos
echo "<br/>";
$removedItens2 = array_splice($arr, 5);

print_r($removedItens2); #Array com os itens que foram removidos
echo "<br/>";
print_r($arr); #Array sem os itens removidos.

$removedItens3 = array_splice($arr, 1, -2);
echo "<br/>";
print_r($removedItens3); #Array com os itens que foram removidos
echo "<br/>";
print_r($arr); #Array sem os itens removidos.