<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2004, 12, 23);

print_r($dataA);

echo "<br>";

print_r($dataB);


$diff = $dataA->diff($dataB);

echo "<br>";

print_r($diff);

echo "<br>";

echo $diff->format("%a days");

