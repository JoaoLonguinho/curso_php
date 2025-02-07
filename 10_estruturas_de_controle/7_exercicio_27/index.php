<?php

$velocidadeCarro = 41;

if($velocidadeCarro < 40){
    echo "Velocidade segura";
}
else if($velocidadeCarro == 40){
    echo "Cuidado, você está quase ultrapassando a velocidade permitida";
}
else{
    echo "Você receberá uma multa em breve";
}