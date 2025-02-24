<?php

$marca = "lalapis"; #esta variavel será sobreescrita com o extract

$arr = [
    "marca" => "lapises",
    "quantidade" => 12,
    "material" => "madeira"
];

extract($arr);

echo "Compramos os lapis de cor para utilizar na escola, escolhemos uma caixa de lapis de cor da $marca, a caixa vem com $quantidade, e são feitos de $material <br/>"; 