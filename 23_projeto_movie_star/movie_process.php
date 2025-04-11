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


if($type === "delete"){
    $id = filter_input(INPUT_POST, "id");

    $movie = $movieDao->findById($id);

    if($movie){
        if($movie->users_id === $userData->id){
            $movieDao->destroy($movie->id);
        }
        else{
            $message->setMessage("Informações inválidas!", "error", "index.php");
        }
    }
    else {
        $message->setMessage("Informações inválidas!", "error", "index.php");
    }
    
    
}
else if($type === "create"){

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
        $movie->users_id = $userData->id;

        // Upload de imagem

        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
            $jpgArray = ["image/jpeg", "image/jpg"];

            // Checando tipo imagem
            if(in_array($image["type"], $imageTypes)){
                // Checa se a imagem é jpg ou jpeg
                if(in_array($image["type"], $jpgArray)){
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                }
                else{
                    $imageFile = imagecreatefrompng($image["tmp_name"]);
                }

                // Gerando o nome da imagem
                $imageName = $movie->imageGenerateName();

                imagejpeg($imageFile, "./img/movies/" . $imageName, 100);

                $movie->image = $imageName;
            }
            else{
                $message->setMessage("Tipo de arquivo inválido, por favor utilizar apenas jpg, jpeg ou png.", "error", "back");
            }
        }
        
        $movieDao->create($movie);
        
    }
    else{
        $message->setMessage("Por favor preecha pelo menos o título, a descrição e a categoria para incluir o filme!", "error", "back");
    }

}
else if($type === "delete"){
    // $userId = $userData->id; // Pega o ID do usuário



}
else{
    $message->setMessage("Filme adicionado!", "success", "index.php");
}