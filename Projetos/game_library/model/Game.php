<?php

class Game{

    public $id;

    public $image;
    public $title;
    public $description;
    public $rating;

    public function setGameId($id){
        $this->id = $id;
        return $this->id;
    }
    public function getGameId(){
        return $this->id;
    }
    public function setGameImage($image){
        $this->image = $image;
        return $this->image;
    }
    public function getGameImage(){
        return $this->image;
    }
    public function setGameName($title){
        $this->title = $title;
        return $title;
    }
    public function getGameName(){
        return $this->title;
    }

    public function setGameDescription($description){
        $this->description = $description;
        return $description;
    }
    public function getGameDescription(){
        return $this->description;
    }

    public function setGameRating($rating){
        $this->rating = $rating;
        return $rating;
    }
    public function getGameRating(){
        return $this->rating;
    }
    public function GenerateImgName(){
        return bin2hex(random_bytes(30)) . ".jpg";
    }

}