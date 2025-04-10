<?php 

    include_once "model/Game.php";
    include_once "dao/gameDao.php";
    //Captura os campos do formulário enviados via POST

    $id = $_POST["id"];
    $updatedName = $_POST["title"];
    $updatedDescription = $_POST["description"];

    $updatedGame = new Game();
    $gameDao = new GameDao($conn);

    $updatedGame = $gameDao->bringSelectedGame($id);
    
    if(isset($_FILES["gameImg"]) && !empty($_FILES["gameImg"]["tmp_name"])){
        $updatedImage = $_FILES["gameImg"];
        $imageTypes = ["image/jpg", "image/jpeg", "image/png"];
        $jpgArray = ["image/jpg", "image/jpeg"];
        
        if(in_array($updatedImage["type"], $imageTypes)){
            if(in_array($updatedImage["type"], $jpgArray)){
                $imageFile = imagecreatefromjpeg($updatedImage["tmp_name"]);
            }
            else{
                $imageFile = imagecreatefrompng($updatedImage["tmp_name"]);
            }

            $imageName = $updatedGame->GenerateImgName();
            
            imagejpeg($imageFile, "./img/games/" . $imageName, 100);

            $updatedGame->setGameImage($imageName);
        }
    }
    
    $updatedGame->setGameName($updatedName);
    $updatedGame->setGameDescription($updatedDescription);

    $gameDao->updateGameInfo($updatedGame);

    header("Location: index.php");
