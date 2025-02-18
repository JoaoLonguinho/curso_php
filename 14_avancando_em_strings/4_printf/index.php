<?php

$name = "João";

#cada letra após a porcentagem significa algo: %s => string / $d => int / %f => float
printf("O nome que será exibido é este que está logo após a vírgula: %s ", $name);
echo "<br>";

printf("O numero que será exibido é este que está logo após a vírgula: %d ", 20);
echo "<br>";

printf("O numero que será exibido é este que está logo após a vírgula: %.1f ", 20.2736); # o .numeroF significa quantas casas serão colocadas após o float;