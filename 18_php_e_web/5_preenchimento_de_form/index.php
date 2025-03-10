<?php

    $user = [
        "nome" => "João",
        "username" => "Jplonguinho",
        "senha" => "testedoteste"
    ];

    if($user){
        $nome = $user["nome"];
        $username = $user["username"];
        $senha = $user["senha"];
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value=<?= $nome ?>>
        </div>
        <div>
            <input type="text" name="username" placeholder="Digite o usuário" value=<?= $username ?>> 
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha" value=<?= $senha ?>>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>