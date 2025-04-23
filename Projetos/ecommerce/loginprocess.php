<?php

require_once "model/User.php";
require_once "model/Message.php";
require_once "dao/UserDao.php";
require_once "globals.php";

$user = new User();
$userDao = new UserDao($conn);
$message = new Message($BASE_URL);


if(isset($_POST)){
    if($_POST["type"] === "register"){
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["confirmpassword"])){
            if($_POST["password"] === $_POST["confirmpassword"]){
                $name = $_POST["name"];
                $email = $_POST["email"];
                $pass = $_POST["password"];
                $token = $user->generateToken();
    
                $password = $user->createPass($pass);
    
                $user->setUserName($name);
                $user->setUserEmail($email);
                $user->setUserPassword($password);
                $user->setUserToken($token);

                $emailValidation = $userDao->findByEmail($email);
                
                if($email != $emailValidation["email"]){
                    $userDao->userRegistration($user);
                    $message->setMessage("Cadastro efetuado com sucesso! Bem-vindo $user->name", "success", "login.php");
                }
                else{
                    $message->setMessage("E-mail já cadastrado.", "error", "login.php");
                }

            }
            else if($_POST["password"] != $_POST["confirmpassword"]){
                // Menssagem de senha
                $message->setMessage("As senhas não coincidem.", "error", "login.php");
            }
        } else {
            $message->setMessage("Por favor preencha todos os campos.", "error", "login.php");
        }
    } else if ($_POST["type"] === "login"){
        if(!empty($_POST["email"]) && !empty($_POST["password"])){
            $email = filter_input(INPUT_POST, "email");
            $password = filter_input(INPUT_POST, "password");

            

            if($userDao->checkData($email, $password)){

            }


        }
    } else{
        $message->setMessage("Dados inválidos.", "error", "login.php");
    }
}