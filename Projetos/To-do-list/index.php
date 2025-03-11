<?php
$file = "todo-list.json";
    if(file_exists($file)){
        $arr = json_decode(file_get_contents($file), true);
        if(!is_array($arr)){
            $arr = [];
        }
    }
    else {
        $arr = [];
    }
    if (isset($_POST['item']) && !empty(trim($_POST['item']))) {
        $nameAct = trim($_POST['item']);
        $arr[] = ["id" => uniqid(), "task" => $nameAct, "completed" => false]; // ID único
        file_put_contents($file, json_encode($arr, JSON_PRETTY_PRINT));
    }    

    if (isset($_POST['remove'])) {
        $removeItem = $_POST['remove'];
        $arr = array_values(array_filter($arr, function($item) use ($removeItem) {
            return $item !== $removeItem;
        }));
    
        file_put_contents($file, json_encode($arr, JSON_PRETTY_PRINT));
    }

    if (isset($_POST['toggle'])) {
        $taskId = $_POST['toggle'];
    
        foreach ($arr as &$task) {
            if ($task['id'] === $taskId) {
                $task['completed'] = !$task['completed']; // Alterna entre true e false
            }
        }
    
        file_put_contents($file, json_encode($arr, JSON_PRETTY_PRINT));
    }
     

    if (isset($_POST['clear'])) {
        file_put_contents($file, json_encode([])); 
        $arr = []; 
    }

    

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do-list</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="container">
        <section class="container first pt-sans-bold">
            <h1>
                Lista de afazeres 
            </h1>
            <ul>
                <li id="listItem initial">
                    <form action="" method="POST">
                        <input type="text" name="item" placeholder="Atividade..." required>
                        <input type="submit" value="+" class="plus-btn">
                    </form>
                </li>
            </ul>
            <div class="container second pt-sans-regular-italic">
                <ul>
                    
                        <?php
                        foreach ($arr as $task):
                            ?>
                                <li class="list-item <?= $task['completed'] ? 'completed' : '' ?>">
                                    <p><?= htmlspecialchars($task['task']) ?></p>
                                    <div class="iconsset">
                                        <form action="" method="POST" style="display:inline;">
                                            <input type="hidden" name="toggle" value="<?= htmlspecialchars($task['id']) ?>"> <!-- Enviando ID -->
                                            <button type="submit" style="border:none; background:none;">
                                                <i class="fa fa-check" style="color:<?= $task['completed'] ? 'gray' : 'green' ?>; font-size: 30px"></i>
                                            </button>
                                        </form>
                            
                                        <form action="" method="POST" style="display:inline;">
                                            <input type="hidden" name="remove" value="<?= htmlspecialchars($task['id']) ?>"> <!-- Enviando ID -->
                                            <button type="submit" style="border:none; background:none;">
                                                <i class="fa fa-times" style="color:red; font-size: 30px"></i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            ?>
                </ul>
            </div>
            <div class="btn-container">
                <form action="index.php" method="POST">
                    <input type="hidden" name="clear" value="1">
                    <input type="submit" value="Limpar itens" class="clear">
                </form>
            </div>

        </section>
    </section>
    <script>
        function toggleCompleted(element) {
            let listItem = element.closest(".list-item"); 
            listItem.classList.toggle("completed"); 
        }
    </script>

</body>
</html>