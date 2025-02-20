<?php

#muito usado;

$str = "está é minha string";

$minha = substr($str, 9, 5);

echo $minha . "<br/>";

echo $str . "<br/>"; # string original não é modificada.

$str2 = "Isso é um novo teste";

$str2Separada = substr($str2, 11);

echo $str2Separada . "<br/>";

$str2SeparadaComNegativo = substr($str2, 11, -5);

echo $str2SeparadaComNegativo . "<br/>";