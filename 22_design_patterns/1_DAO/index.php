<?php
    include_once("db.php");
    include_once("dao/carDAOMySql.php");

    $carDao = new CarDao($conn);

    $cars = $carDao->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand"> Marca do carro: </label>
            <input type="text" name="brand" placeholder="Insira a marca"> 
    </div>
    <div>
        <label for="km"> Kilometragem: </label>
            <input type="text" name="km" placeholder="Insira a kilometragem"> 
    </div>
    <div>
        <label for="color"> Insira a cor:</label>
            <input type="text" name="color" placeholder="Insira a cor"> 
    </div>
    <input type="submit" value="Enviar">
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li><?= $car->getBrand(); ?> - <?= $car->getKm(); ?> - <?= $car->getColor(); ?></li>
    <?php endforeach; ?>
</ul>