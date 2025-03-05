<?php

$data = new DateTime();

echo $data->format("d/m/Y") . "<br/>";

$data->modify("+10 years"); #Adiciona mais 10 anos na data.

echo $data->format("d/m/Y");