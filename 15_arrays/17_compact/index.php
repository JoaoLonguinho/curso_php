<?php

$nome = "João";
$profissao = "programador";

$arr = compact("nome", "profissao"); #Lembrar de passar sempre como string

print_r($arr);