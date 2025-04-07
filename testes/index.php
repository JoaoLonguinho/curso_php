<?php

    $dbhost = "localhost";
    $dbname = "tests";
    $dbuser = "root";
    $dbpassword = "";

    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
        // Define o modo de erro do PDO para exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }

    if(!empty($_POST["name"])){
        $name = $_POST["name"];
        
        $stmt = $conn->prepare("INSERT INTO users (name) VALUES (:name)");
    
        $stmt->bindParam(":name", $name);
    
        $stmt->execute();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de cadastro</title>
</head>
    <form action="index.php" method="POST">
        <input type="tel" name="name" id="name" placeholder="Digite seu nome">
        <input type="submit" value="Cadastrar">
    </form>
    <?php if(isset($name)): ?>
        <h1>Olá <?= $name ?>, tudo bem?</h1>
    <?php endif; ?>
</body>
</html>