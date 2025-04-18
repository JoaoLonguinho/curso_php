<?php

require_once "models/Review.php";
require_once "models/Message.php";
require_once "dao/userDAO.php";

class ReviewDAO implements ReviewDAOInterface
{
    private $conn;

    private $url;

    private $message;

    public function __construct($conn, $url, $message)
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

    }
    public function getMoviesReview($id){

    }
    public function hasAlreadyReviewed($id, $userId){

    }
    public function getRatings($id){

    }
}