<?php
    require_once "models/user.php";
    require_once "dao/userDAO.php";
    require_once "globals.php";
    require_once "db.php";

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
                // Envia mensagem de erro
            }
            
        break;

        case "login":

        break;
    }