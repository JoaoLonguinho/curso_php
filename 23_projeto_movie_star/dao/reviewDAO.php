<?php

require_once "models/Review.php";
require_once "models/Message.php";
require_once "dao/userDAO.php";

class ReviewDAO implements ReviewDAOInterface
{
    private $conn;

    private $url;

    private $message;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    public function buildReview($data){
        $reviewObject = new Review();

        $reviewObject->id = $data["id"];
        $reviewObject->rating = $data["rating"];
        $reviewObject->review = $data["review"];
        $reviewObject->user_id = $data["user_id"];
        $reviewObject->movies_id = $data["movies_id"];

        return $reviewObject;
    }
    public function create(Review $review){
        $rating = $review->rating;
        $review = $review->review;
        $movies_id = $review->movies_id;
        $users_id = $review->users_id;

        $stmt = $this->conn->prepare("INSERT INTO movies (rating, review, movies_id, users_id) 
        VALUES 
        (:rating, :review, :movies_id, :users_id)");

        $stmt->bindParam("rating", $rating);
        $stmt->bindParam("review", $review);
        $stmt->bindParam("movies_id", $movies_id);
        $stmt->bindParam("users_id", $users_id);

        $stmt->execute();

        //Mensagem de sucesso ao adicionar o filme
        $this->message->setMessage("Comentário e notas publicados!", "success", "index.php");
    }
    public function getMoviesReview($id){

    }
    public function hasAlreadyReviewed($id, $userId){

    }
    public function getRatings($id){

    }
}