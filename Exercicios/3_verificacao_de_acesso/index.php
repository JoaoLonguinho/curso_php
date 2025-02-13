<?php

function verificarAcesso($num, $acess){
    if($num >= 18 && $acess == true){
        return "Acesso autorizado";
    }
    else if($num < 18){
        return "Acesso negado. Idade mínima requerida: 18 anos";
    }
    else{
        return "Acesso negado. Autorização necessária";
    }
}