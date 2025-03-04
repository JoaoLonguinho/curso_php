<?php

#class_exists()

class Humano {
    public $nome;
    public $profissao;
    public $hobbies;
}

if(class_exists("Humano")){
    echo "Está classe existe";
}
else{
    echo "Não existe";
};
#get_class_methods()

class Cachorro{
    public function latir(){
        echo "Au au";
    }
}

echo "<br/>";

print_r(get_class_methods("Cachorro"));
echo "<br/>";

#get_class_vars()

print_r(get_class_vars("Humano"));
