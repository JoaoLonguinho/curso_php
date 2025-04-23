<?php

require_once "db.php";
require_once "globals.php";
require_once "model/Message.php";

$message = new Message($BASE_URL);

class UserDao
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function userRegistration(User $user)
    {

        $stmt = $this->conn->prepare("INSERT INTO users (
        name, email, password, token
        ) VALUES (
        :name, :email, :password, :token)");
        
        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $user->token);

        $stmt->execute();
    }
    public function findByEmail($email){
        $stmt = $this->conn->prepare("SELECT email FROM users WHERE email = :email");

        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $result = $stmt->fetch();

        return $result;
    }
    public function checkData($email, $password){

        $stmt = $this->conn->prepare("SELECT token FROM users WHERE email = :email AND password = :password");

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        $result = $stmt->fetch();

        print_r($result);

    }
}