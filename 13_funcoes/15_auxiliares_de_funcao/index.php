<?php

function soma($a, $b, $c){
    print_r(func_get_args()); #Traz em formato de array, todos os argumentos passados
    echo "<br/>";
    echo func_num_args(); #Traz o total de argumentos
    echo "<br/>";
}

soma(4,9, 268);