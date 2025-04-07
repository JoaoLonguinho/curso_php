<?php

require_once "globals.php";
class Tarefa{
    public $tasks;

    public function setTaskName($tasks){ // Funcional
        $this->tasks = $tasks;
        return $tasks;
    }
    public function getTaskName(){ // Funcional
        return $this->tasks;
    }
    public function confirmTask(){

    }
    public function deleteTask(){

    }
}

interface tarefaDAOInterface{
    public function buildTask($data);
}