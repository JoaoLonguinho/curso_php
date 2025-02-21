<?php

$str = "testando encontrando outra palavra teste, em uma string teste";

$palavra = strrpos($str, "teste"); #encontra a palavra da direita para a esquerda, o "r" a mais no strrpos significa right.

echo $palavra . "<br/>";

$p = substr($str, strpos($str, "uma"), 3);

echo $p;
