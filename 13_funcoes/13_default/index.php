<?php

function teste($t = "Você não inseriu nenhum dado."){ # sempre colocar o valor default como ultimo parametro para evitar erros 
    return "O dado que você inseriu foi: $t <br/>";
}

echo teste();
echo teste(24);