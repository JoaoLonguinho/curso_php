<?php

$data = new DateTime();

print_r($data);

echo "<br/>";
$data->setDate(1997, 11, 24);

print_r($data);

echo "<br/>";

echo $data->format("d/m/Y") . "<br/>";

print_r($data);

echo "<br/>";

$data->setTime(05, 12, 10);

print_r($data);