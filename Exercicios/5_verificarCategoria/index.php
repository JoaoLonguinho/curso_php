<?php

function verificarCategoria($categoria){
    if($categoria === "eletrônicos"){
        return "Essa categoria é de produtos eletrônicos";
    }
    else if($categoria === "vestuário"){
        return "Essa categoria é de produtos de vestuário";
    }
    else if($categoria === "alimentos"){
        return "Essa categoria é de produtos alimentícios";
    }
    else{
        return "Categoria desconhecida";
    }
};