<?php

require_once "models/Movie.php";
require_once "models/Message.php";

class MovieDao implements MovieDAOInterface
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

    public function buildMovie($data)
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
    public function findAll()
    {

    }
    public function getLatestMovies()
    {
        $movies = [];
        $stmt = $this->conn->query("SELECT * FROM movies ORDER BY id DESC");

        $stmt->execute();

        if($stmt->rowCount() > 0){

            $moviesArray = $stmt->fetchAll();

            foreach($moviesArray as $movie){
                $movies[] = $this->buildMovie($movie);
            }
        }

        return $movies;
    }
    public function getMoviesByCategory($category)
    {
        $movies = [];

        $stmt = $this->conn->prepare("SELECT * FROM movies WHERE category = :category ORDER BY id DESC");

        $stmt->bindParam(":category", $category);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            $moviesArray = $stmt->fetchAll();

            foreach($moviesArray as $movie){
                $movies[] = $this->buildMovie($movie);
            }
        }
        return $movies;
    }
    public function getMoviesById($id)
    {
        
    }
    public function findById($id)
    {
        $movie = [];

        $stmt = $this->conn->prepare("SELECT * FROM movies WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            
            $movieData = $stmt->fetch();

            $movie = $this->buildMovie($movieData);

            return $movie;
        }
        else{
            return false;
        }


    }
    public function findByTittle($title)
    {

    }
    public function create(Movie $movie)
    {
        $title = $movie->title;
        $description = $movie->description;
        $image = $movie->image;
        $trailer = $movie->trailer;
        $category = $movie->category;
        $length = $movie->length;
        $users_id = $movie->users_id;

        $stmt = $this->conn->prepare("INSERT INTO movies (
        title,
        description,
        image,
        trailer,
        category,
        length,
        users_id
        )VALUES(
        :title,
        :description,
        :image, 
        :trailer,
        :category,
        :length,
        :users_id
        )
        ");

        $stmt->bindParam("title", $title);
        $stmt->bindParam("description", $description);
        $stmt->bindParam("image", $image);
        $stmt->bindParam("trailer", $trailer);
        $stmt->bindParam("category", $category);
        $stmt->bindParam("length", $length);
        $stmt->bindParam("users_id", $users_id);

        $stmt->execute();

        //Mensagem de sucesso ao adicionar o filme
        $this->message->setMessage("Filme adicionado com sucesso!", "success", "index.php");
    }
    public function update(Movie $movie)
    {

    }
    public function destroy(Movie $movie)
    {

    }

    public function getMoviesByUserId($id){
        $movies = [];

        $stmt = $this->conn->prepare("SELECT * FROM movies WHERE users_id = :users_id ORDER BY id ASC");

        $stmt->bindParam(":users_id", $id);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            $moviesArray = $stmt->fetchAll();
            foreach($moviesArray as $movie){
                $movies[] = $this->buildMovie($movie);
            }
        }
        return $movies;
    }

}