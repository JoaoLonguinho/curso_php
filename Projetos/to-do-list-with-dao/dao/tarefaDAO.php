<?php 

require_once "globals.php";
require_once "model/Tarefa.php";
require_once "db.php";

class TarefaDao implements tarefaDAOInterface{

    private $conn;

    public function __construct(PDO $conn){
        $this->conn = $conn;
    }

    public function buildTask($data){
        $stmt = $this->conn->prepare("INSERT INTO tasks (tasks) VALUES (:tasks)");

        $stmt->bindParam(":tasks", $data->tasks);

        $stmt->execute();
    }

    public function bringTasks(){
        $taskName = [];
        
        $stmt = $this->conn->prepare("SELECT * FROM tasks");
        
        $stmt->execute();

        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($tasks as $task){
            $taskRegistred = new Tarefa();

            $taskRegistred->setTaskName($task["tasks"]);

            $taskName[] = $taskRegistred;

        }
        return $taskName;
    }
}