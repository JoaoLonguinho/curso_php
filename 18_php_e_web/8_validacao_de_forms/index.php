<?php

    $validacoes = [];

    if(count($_POST) > 0){
        if($_POST["nome"] === ""){
            $validacoes[] = "Por favor, preencha o nome de usuário!";
        }
    }

    if(count($_POST) > 0){
        if($_POST["email"] === ""){
            $validacoes[] = "Por favor, preencha o e-mail do usuário!";
        }
    }

    if(count($_POST) > 0){
        if($_POST["senha"] != $_POST["confirmacao"]){
            $validacoes[] = "As senhas devem ser iguais!";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)) :  ?>
        <ul>
            <?php foreach($validacoes as $item): ?>
            <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="email" name="email" placeholder="Digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Digite sua senha novamente">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
</body>
</html>