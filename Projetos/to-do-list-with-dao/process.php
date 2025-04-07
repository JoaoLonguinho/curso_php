<?php 

require_once "globals.php";
require_once "model/Tarefa.php";
require_once "dao/tarefaDAO.php";
require_once "db.php";

//Cria o objeto tarefa
$newTask = new Tarefa();
$newTaskDao = new TarefaDao($conn);

if(isset($_POST["tasks"])){
    // Adiciona o valor na variável
    $tasks = filter_input(INPUT_POST, "tasks");
    //Atribui o nome a tarefa ao objeto
    $newTask->setTaskName($tasks);
    
    // print_r($newTask);
    // Inserir o nome da tarefa no banco
    $newTaskDao->buildTask($newTask);

    $newTaskDao->bringTasks();

    header("Location: index.php");
}
else{
    echo "Nada";
}