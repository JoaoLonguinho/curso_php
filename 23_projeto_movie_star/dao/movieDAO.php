<?php 

require_once "models/Movie.php";
require_once "models/Message.php";

class MovieDao implements MovieDAOInterface{

    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url){
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    
    public function buildUser($data) // Cria o filme
    {
        $movie = new Movie();

        $movie->id = $data["id"];
        $movie->title = $data["title"];
        $movie->description = $data["description"];
        $movie->image = $data["image"];
        $movie->trailer = $data["trailer"];
        $movie->category = $data["category"];
        $movie->length = $data["length"];
        $movie->users_id = $data["users_id"];

        return $movie;
    }

    public function buildMovie($data){

    }
    public function findAll(){

    }
    public function getLatestMovies(){

    }
    public function getMoviesByCategory($category){

    }
    public function getMoviesById($id){

    }
    public function findById($id){

    }
    public function findByTittle($title){

    }
    public function create(Movie $movie){

    }
    public function update(Movie $movie){

    }
    public function destroy(Movie $movie){

    }

}