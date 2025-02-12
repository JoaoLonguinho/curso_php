<?php

$uno = 200;

function velocidadeMaxima($vel = 100) {
    if(!is_int($vel)){
        echo "O valor $vel, não é um valor válido, por favor insira um valor inteiro";
    }
    else{
        echo "O carro atinge a velocidade máxima de: $vel km/h <br/>";
    };
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);
velocidadeMaxima(500);
velocidadeMaxima($uno);
velocidadeMaxima("Teste");