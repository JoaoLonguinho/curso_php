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
    if(isset($_POST['item']) && !empty(trim($_POST['item']))){
        $nameAct = trim($_POST['item']);
        $arr[] = $nameAct;
        file_put_contents($file, json_encode($arr, JSON_PRETTY_PRINT));
    }

    function removeItem(){
        $itemInARow = json_decode(file_get_contents($file), true);
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
                        foreach($arr as $item):
                        ?>
                            <li class="list-item">
                                <p><?= htmlspecialchars($item)?></p> <div class="iconsset"><i class="fa fa-check" style="color:green"></i> <i class="fa fa-times" style="color:red"></i></div>
                            </li>
                        <?php
                        endforeach;
                        ?>
                </ul>
            </div>

        </section>
    </section>
</body>
</html>