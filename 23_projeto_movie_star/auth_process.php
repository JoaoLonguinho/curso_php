<?php
    require_once "models/User.php";
    require_once "models/Message.php";
    require_once "dao/userDAO.php";
    require_once "globals.php";
    require_once "db.php";

    $message = new Message($BASE_URL);
    // resgata tipo form

    $type = filter_input(INPUT_POST, "type");

    // verifica tipo form

    switch($type){
        case "register":
            $name = filter_input(INPUT_POST, "name");
            $lastname = filter_input(INPUT_POST, "lastname");
            $email = filter_input(INPUT_POST, "email");
            $password = filter_input(INPUT_POST, "password");
            $confirmPassword = filter_input(INPUT_POST, "confirmPassword");

            // Verificacao de dados mínimos

            if($name && $lastname && $email && $password){

            } else {
                $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
            }
            
        break;

        case "login":

        break;
    }