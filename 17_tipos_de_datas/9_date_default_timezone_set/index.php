<?php

date_default_timezone_set('America/Sao_Paulo');

$date = new DateTime();

$date->setDate(2077, 5, 30);
$date->setTime(05, 22, 39);

print_r($date);