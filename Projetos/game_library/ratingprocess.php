<?php 

include_once "dao/gameDao.php";
include_once "model/Game.php";

if(isset($_POST["type"])){
    $type = $_POST["type"];
    if($type === "rating"){
        if(isset($_POST["rating"])){
            $gameId = $_POST["gameId"];
            $gameRating = $_POST["rating"];
        
            $gameDao = new GameDao($conn);
            $game = new Game();
        
            $game->setGameId($gameId);
            $game->setGameRating($gameRating);
        
            
            $gameDao->updateGameRating($game);
        
            header("Location: index.php");
        }
        else{
        
        }
    }
}
