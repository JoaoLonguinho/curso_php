<?php

require_once "db.php";
require_once "globals.php";
require_once "model/Message.php";
require_once "model/User.php";

$message = new Message($BASE_URL);
$user = new User();

class UserDao
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function buildUser($data){
        $user = new User();

        $user->id = $data["id"];
        $user->name = $data["name"];
        $user->email = $data["email"];
        $user->token = $data["token"];
        $user->password = $data["password"];
        $user->created_at = $data["created_at"];

        return $user;
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
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

        $stmt->bindParam(":email", $email);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            $result = $stmt->fetch();
            $user = $this->buildUser($result);
            
            return $user;
        } else {
            return false;
        }

    }
    public function checkData($email, $password){
        

        $user = $this->findByEmail($email);

        if($user){
            
            if(password_verify($password, $user->password)){
            }
        }
        
    }
}