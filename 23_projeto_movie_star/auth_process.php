<?php
    require_once "models/User.php";
    require_once "models/Message.php";
    require_once "dao/userDAO.php";
    require_once "globals.php";
    require_once "db.php";

    $message = new Message($BASE_URL);
    // resgata tipo form

    $userDao = new UserDao($conn, $BASE_URL);

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
                if($password === $confirmPassword){
                    //Verifica se o e-mail já está cadastrado
                    if($userDao->findByEmail($email) === false){
                        $user = new User();

                        // Criação de token + senha 
                        $userToken = $user->generateToken();
                        $finalPassword = $user->generatePassword($password);

                        $user->name = $name;
                        $user->lastname = $lastname;
                        $user->email = $email;
                        $user->password = $finalPassword;
                        $user->token = $userToken;

                        $auth = true;

                        $userDao->create($user, $auth);
                    }
                    else{
                        $message->setMessage("E-mail já cadastrado.", "error", "back");
                    }
                }
                else {
                    // Senhas não batem
                    $message->setMessage("As senhas não coincidem.", "error", "back");
                }
            } else {
                // Dados faltantes
                $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
            }
            
        break;

        case "login":

        break;
    }