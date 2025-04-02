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

//Atualiza o usuário
if($type === "update"){
    // Resgata dados do usuário
    $userData = $userDao->verifyToken();

    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    // $image = filter_input(INPUT_POST, "image");
    $bio = filter_input(INPUT_POST, "bio");

    // Preenche os dados do usuário

    $userData->name = $name;
    $userData->lastname = $lastname;
    $userData->email = $email;
    // $user->image = $image;
    $userData->bio = $bio;

    // upload de imagens
    if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
        $jpgArray = ["image/jpeg", "image/jpg"];
        // Checagem de tipo de imagem
        if(in_array($image["type"], $imageTypes)){
            // Checar se é jpg
            if (in_array($image["type"], $jpgArray)) {
                $imageFile = imagecreatefromjpeg($image["tmp_name"]);
            } else {
                //Imagem png 
                $imageFile = imagecreatefrompng($image["tmp_name"]);
            }
            $imageName = $userData->imageGenerateName();

            imagejpeg($imageFile, "./img/users/" . $imageName, 100);
            $userData->image = $imageName;
        }
        else{
            $message->setMessage("Tipo de arquivo não permitido, por favor envie .jpeg, .jpg ou .png", "error", "index.php");
        }
    }

    $userDao->update($userData);

} else if ($type === "changepassword"){
    // Altera senha
} else {
    $message->setMessage("Informações inválidas", "error", "index.php");
}