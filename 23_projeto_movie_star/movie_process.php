<?php 
require_once "globals.php";
require_once "db.php";
require_once "models/Movie.php";
require_once "models/Message.php";
require_once "dao/userDAO.php";
require_once "dao/movieDAO.php";

$message = new Message($BASE_URL);

$movieDao = new MovieDao($conn, $BASE_URL);
// resgata tipo form

$userDao = new UserDao($conn, $BASE_URL);

$type = filter_input(INPUT_POST, "type");

$userData = $userDao->verifyToken();

if($type === "create"){

    $title = filter_input(INPUT_POST, "title");
    // $image = filter_input(INPUT_POST, "image");
    $length = filter_input(INPUT_POST, "length");
    $category = filter_input(INPUT_POST, "category");
    $trailer = filter_input(INPUT_POST, "trailer");
    $description = filter_input(INPUT_POST, "description");

    $movie = new Movie();

    if(!empty($title) && !empty($category) && !empty($description)){
        $movie->title = $title;
        $movie->length = $length;
        $movie->category = $category;
        $movie->trailer = $trailer;
        $movie->description = $description;

        // Upload de imagem
    }
    else{
        $message->setMessage("Por favor preecha pelo menos o título, a descrição e a categoria para incluir o filme!", "error", "back");
    }

}
else{
    $message->setMessage("Filme adicionado!", "cuccess", "index.php");
}