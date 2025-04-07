<?php 

class Movie{
    public $id;
    public $title;
    public $description;
    public $image;
    public $trailer;
    public $category;
    public $length;
    public $users_id;

    public function imageGenerateName(){
        return bin2hex(random_bytes(30)) . ".jpg";
    }
}

interface MovieDAOInterface {
    public function buildMovie($data);
    public function findAll();
    public function getLatestMovies();
    public function getMoviesByCategory($category);
    public function getMoviesById($id);
    public function findById($id);
    public function findByTittle($title);
    public function create(Movie $movie);
    public function update(Movie $movie);
    public function destroy(Movie $movie);
}