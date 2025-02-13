<?php

function calcularDesconto($valorProduto, $categoria = 0){
    if($categoria === "eletrônicos"){
        $categoria = 10;
    }
    else if($categoria === "vestuário"){
        $categoria = 20;
    }
    else if ($categoria === "alimentos"){
        $categoria = 5;
    }
    else{
        $categoria = 0;
    }
    
    $valorComDesconto = $valorProduto / 100 * $categoria;
    return $valorComDesconto;
}

echo calcularDesconto(120, "alimentos");