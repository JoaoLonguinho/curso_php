<?php

class Character{
    public $id;
    public $name;
    public $image;
    public $selected;

    public function setCharacterId($id){
        $this->id = $id;
        return $id;
    }
    public function getCharacterId(){
        return $this->id;
    }
    public function setCharacterName($name){
        $this->name = $name;
        return $name;
    }
    public function getCharacterName(){
        return $this->name;
    }
    public function setCharacterImage($image){
        $this->image = $image;
        return $image;
    }
    public function getCharacterImage($image){
        return $this->image;
    }

}