<?php 

    include_once "model/Game.php";
    include_once "dao/gameDao.php";
    //Captura os campos do formulário enviados via POST
    
    $name = $_POST["title"];
    $description = $_POST["description"];

    
    $game = new Game();
    $gameDao = new GameDao($conn);
    
    if(isset($_FILES["gameImg"]) && !empty($_FILES["gameImg"]["tmp_name"])){
        $image = $_FILES["gameImg"];
        $imageTypes = ["image/jpg", "image/jpeg", "image/png"];
        $jpgArray = ["image/jpg", "image/jpeg"];
        
        if(in_array($image["type"], $imageTypes)){
            if(in_array($image["type"], $jpgArray)){
                $imageFile = imagecreatefromjpeg($image["tmp_name"]);
            }
            else{
                $imageFile = imagecreatefrompng($image["tmp_name"]);
            }

            $imageName = $game->GenerateImgName();
            
            imagejpeg($imageFile, "./img/games/" . $imageName, 100);

            $game->setGameImage($imageName);
        }
    }
    
    $game->setGameName($name);
    $game->setGameDescription($description);

    $gameDao->searchAllGames($game);

    header("Location: index.php");

?>