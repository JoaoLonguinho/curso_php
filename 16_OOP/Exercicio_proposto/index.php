<?php

class Task{
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }
    
    public function markAsCompleted(){
        $this->completed = true;
    }
    public function markAsIncomplete(){
        $this->completed = false;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function isCompleted(){
        if($this->completed === true){
            return true;
        }
        else{
            return false;
        }
    }
}

$estudar = new Task("Estudar <br/>", "Estudar para a prova.");

echo $estudar->getTitle();
echo $estudar->getDescription();

