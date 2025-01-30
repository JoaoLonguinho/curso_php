<?php

$a = 1.3;

echo $a;
echo '<br/>';
echo 11,23; # Aqui ele lê o número direto, sem a virgula, pois o padrão do PHP não entende a virgula.
echo '<br/>';
echo 11.23; # Está é a forma correta
echo '<br/>';
echo 13.2 + 2.12323;
echo '<br/>';
echo 25 + 12.423; # Php permite fazer soma entre inteiros e floats