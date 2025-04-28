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

    private $url;

    private $message;


    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }
    public function buildUser($data)
    {
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
    public function findByEmail($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

        $stmt->bindParam(":email", $email);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch();
            $user = $this->buildUser($result);

            return $user;
        } else {
            return false;
        }

    }
    public function setTokenToSession($token, $redirect = true)
    {
        $_SESSION["token"] = $token;

        if ($redirect) {
            $this->message->setMessage("Seja bem vindo!", "success", "index.php");
        }
    }
    public function checkData($email, $password)
    {

        $user = $this->findByEmail($email);

        if ($user) {

            if (password_verify($password, $user->password)) {

                $token = $user->generateToken();

                $this->setTokenToSession($token, false);

                $user->token = $token;

                $this->update($user, false);

                return true;

            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function update(User $user, $redirect = true)
    {
        $stmt = $this->conn->prepare("UPDATE users
        SET name = :name, 
        email = :email, 
        password = :password, 
        token = :token 
        WHERE id = :id");

        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $user->token);
        $stmt->bindParam(":id", $user->id);

        $stmt->execute();

        if ($redirect) {
            $this->message->setMessage("Dados atualizados com sucesso!", "success", "index.php");
        }
    }

    public function getSessionToken($protected = false)
    {
        if (!empty($_SESSION["token"])) {
            $token = $_SESSION["token"];
            
            $user = $this->findByToken($token);
            if($user){
                return $user;
            } else if ($protected){
                $this->message->setMessage("É necessário estar logado para acessar esta página.", "error", "index.php");
            }
        }
        else if($protected){
            $this->message->setMessage("É necessário estar logado para acessar esta página.", "error", "index.php");
        }
        else{
            return false;
        }
    }
    public function findByToken($token){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token");

        $stmt->bindParam(":token", $token);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            $result = $stmt->fetch();
            $user = $this->buildUser($result);
        }
        return $user;
    }
    public function destroyToken(){
        if (!empty($_SESSION["token"])){
            $_SESSION["token"] = "";
            $_SESSION["cartItens"] = "";
        }
    }
    
}