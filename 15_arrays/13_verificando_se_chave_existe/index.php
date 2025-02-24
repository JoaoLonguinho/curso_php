<?php

    $filme = [
        "Nome" => "Jurassic Park",
        "Categoria" => "Ação, Ficcção",
        "Classificação Indicativa" => "Livre"
    ];

    if(array_key_exists("Nome", $filme)){
        echo "A chave existe <br/>";
    }
    else{
        echo "A chave não existe <br/>";
    };

    if(array_key_exists("Duração", $filme)){
        echo "A chave existe <br/>";
    }
    else{
        echo "A chave não existe <br/>";
    };
    #Forma mais utilizada, funciona para verificar se variaveis também já foram declaradas.
    if(isset($filme["Nome"])){
        echo "A chave existe <br/>";
    }
    else{
        echo "A chave não existe <br/>";
    };
    if(isset($filme["Duração"])){
        echo "A chave existe <br/>";
    }
    else{
        echo "A chave não existe <br/>";
    };
    