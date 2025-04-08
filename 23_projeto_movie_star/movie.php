<?php
    require_once("templates/header.php");

    // Verifica se usuário está autenticado
    require_once("models/Movie.php");
    require_once("dao/movieDAO.php");

    $user = new User();
    $userDao = new UserDao($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);

    $id = filter_input(INPUT_GET, "id");

    $movie;

    $movieDao = new MovieDao($conn, $BASE_URL);

    if(empty($id)){
        $message->setMessage("Nenhum filme selecionado, pode gentileza selecione um filme.", "error", "index.php");
    }
    else{
        $movie = $movieDao->findById($id);

        if(!$movie){
            $message->setMessage("Nenhum filme selecionado, pode gentileza selecione um filme.", "error", "index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>