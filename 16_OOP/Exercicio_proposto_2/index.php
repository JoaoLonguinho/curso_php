<?php

class Contact {
    public $name;
    public $email;
    public $phone;

    public function __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }
    function setEmail($email){
        $this->email = $email;
        return $this->name;
    }
    function setPhone($phone){
        $this->phone = $phone;
        return $this->name;
    }

};

$joao = new Contact("João Longuinho", "joao.pedro7111@hotmail.com", "11 98873-7500");

echo $joao->email . "<br/>";

$joao->setEmail("joao.pedro7222@hotmail.com");

echo $joao->email . "<br/>";