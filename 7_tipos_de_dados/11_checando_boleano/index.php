<?php

$podeEntrar = true;

if(is_bool($podeEntrar)){
    echo "é boleano<br/>";
}
if(is_bool(0)){
    echo "É Boleano também<br/>";
}
if(is_bool(false)){
    echo "É Boleano também<br/>";
}
if(0.0 == false){
    echo "0, 0.0, num e [] são considerados falsos";
}