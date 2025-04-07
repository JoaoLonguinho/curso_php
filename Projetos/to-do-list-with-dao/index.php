<?php

require_once "globals.php";
require_once "model/Tarefa.php";
require_once "dao/tarefaDAO.php";
require_once "db.php";

$newTaskDao = new TarefaDao($conn);

$newTaskList = $newTaskDao->bringTasks();

print_r($newTaskList);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <title>To-do-list</title>
</head>

<body>
    <main>
        <div class="title">
            <h1>Bem-vindo a sua lista de tarefas feita com PHP utilizando DAO!</h1>
        </div>
        <div>
            <form action="<?= $BASE_URL ?>process.php" method="POST">
                <h2>Vamos começar incluindo uma tarefa:</h2>
                <input type="text" name="tasks" id="tasks" placeholder="Digite a tarefa:" required>
                <input type="submit" value="Incluir">
            </form>
            <div>
                <ul>
                    <?php if(isset($newTaskList)): ?>
                        <?php foreach($newTaskList as $task): ?>
                            <li> <?= $task->getTaskName() ?> </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>