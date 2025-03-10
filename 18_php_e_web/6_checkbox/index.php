<?php

    if(isset($_POST["ingredientes"])){
        $ingredientes = $_POST["ingredientes"];

        print_r($ingredientes);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
        <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
        <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
        <input type="checkbox" name="ingredientes[]" value="Cenoura"> Cenoura
        <input type="checkbox" name="ingredientes[]" value="Rúcula"> Rúcula
        <input type="checkbox" name="ingredientes[]" value="Gengibre"> Gengibre
        <input type="submit" value="Enviar">
    </form>
</body>
</html>