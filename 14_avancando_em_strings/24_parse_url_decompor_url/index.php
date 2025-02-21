<?php

$url = "https://www.google.com.br/?hl=pt-BR";

$arrayURL = parse_url($url);

print_r($arrayURL);
echo "<br>";

echo $arrayURL["host"];
echo "<br>";