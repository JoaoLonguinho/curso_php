<?php

$dataFormatoString = date('d/m/Y', strtotime("+2 years"));

echo $dataFormatoString . "<br/>";

$tresSemanas = strtotime("3 weeks");

echo $tresSemanas . "<br/>";

$atualMaisTresSemanas = date('d/m/Y', $tresSemanas); // o segundo parametro adiciona o valor a data, ou seja, o dia atual + 3 semanas

echo $atualMaisTresSemanas . "<br/>";
