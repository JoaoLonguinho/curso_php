<?php

$jogo = new class{
    public $nome;
    public $categoria;
};

if(is_object($jogo)){
    echo "É um objeto <br/>";
}

class Cartao {
    public $nome;
    public $code;
    public $money;
    public function sacar(){
        return $money;
    }
}

$card = new Cartao;

if(is_object($card)){
    echo "Também é um objeto<br/>";
}
echo get_class($jogo); // retorna anonima
echo "<br/>";
echo get_class($card);
echo "<br/>";
if(method_exists($card, "sacar")){
    echo "Este método existe";
}
else{
    echo "Sem metodos com este nome";
}