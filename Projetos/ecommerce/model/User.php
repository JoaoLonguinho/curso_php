<?php

class User{
    public $id;
    public $name;
    public $email;
    public $password;
    public $token;
    public $created_at;

    public function createPass($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function generateToken(){
        return bin2hex(random_bytes(20));
    }
    public function setUserName($name){
        $this->name = $name;
        return $name;
    }
    public function setUserEmail($email){
        $this->email = $email;
        return $email;
    }
    public function setUserToken($token){
        $this->token = $token;
        return $token;
    }
    public function setUserPassword($password){
        $this->password = $password;
        return $password;
    }
}