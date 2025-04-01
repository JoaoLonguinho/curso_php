<?php

class User{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;
    public $image;
    public $bio;
    public $token;

    public function generateToken(){
        return bin2hex(random_bytes(50)); // Deixa a possíbilidade de criar 2 tokens iguais, quase nulas, o random_bytes cria uma string de 50 caracteres, e o bin2hex modifica ela para deixar mais complexa
    }

    public function generatePassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }
}

interface userDAOInterface {
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function update(User $user, $redirect = true);
    public function verifyToken($protected = false);
    public function setTokenToSession($token, $redirect = true);
    public function authenticateUser($email, $password);
    public function findByEmail($email);
    public function findById($id);
    public function findByToken($token);
    public function destroyToken();
    public function changePassword(User $user);

}