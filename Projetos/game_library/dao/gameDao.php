<?php 

include_once "db.php";


class GameDao{
    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function buildGame($gameInfo){
        $game = new Game();

        $game->id = $gameInfo["id"];
        $game->title = $gameInfo["title"];
        $game->description = $gameInfo["description"];
        $game->rating = $gameInfo["rating"];
        $game->image = $gameInfo["image"];

        return $game;
    }

    public function searchAllGames(Game $newGame){

        $title = $newGame->title;
        $description = $newGame->description;
        $image = $newGame->image;

        $stmt = $this->conn->prepare("INSERT INTO game (title, description, image) VALUES (:title, :description, :image)");

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":image", $image);

        $stmt->execute();
    }

    public function bringGames()
    {
        $filteredGameList = [];

        $stmt = $this->conn->prepare("SELECT * FROM game");

        $stmt->execute();

        $dbGameList = $stmt->fetchAll();

        foreach($dbGameList as $game){
            $filteredGameList[] = $this->buildGame($game);
        }

        return $filteredGameList;
    }

    public function updateGameRating(Game $game){

        $rating = $game->rating;
        $id = $game->id;

        $stmt = $this->conn->prepare("UPDATE game SET rating = :rating WHERE id = :id");

        $stmt->bindParam(":rating", $rating);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function deleteGame(Game $game){
        $id = $game->id;

        $stmt = $this->conn->prepare("DELETE FROM game WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function bringSelectedGame($SelectedGameId){
        $id = $SelectedGameId;


        $stmt = $this->conn->prepare("SELECT * FROM game WHERE id = :id");

        $stmt->bindParam(":id", $SelectedGameId);

        $stmt->execute();

        $theGameData = $stmt->fetch();

        $theGame = $this->buildGame($theGameData);
        
        return $theGame;
    }

    public function updateGameInfo(Game $updateGame){

        $id = $updateGame->id;
        $title = $updateGame->title;
        $description = $updateGame->description;
        $image = $updateGame->image;

        $stmt = $this->conn->prepare("UPDATE game SET title = :title, description = :description, image = :image WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":image", $image);

        $stmt->execute();
    }

}