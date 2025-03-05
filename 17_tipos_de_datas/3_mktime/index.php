<?php

$dataNascimento = mktime(12, 30, 49, 11, 24, 1997);

echo $dataNascimento . "<br/>";

$dataNascimentoFormat = date("d/m/Y", $dataNascimento);

echo $dataNascimentoFormat;