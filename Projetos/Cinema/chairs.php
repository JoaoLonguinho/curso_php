<?php
    include_once("templates/header.php");

?>

<section class="cart">
    <ul>Carrinho:</ul>
        <li>Filme: <?= $_SESSION["movie"]?></li>
        <li>Pipoca: <?= $_SESSION["popcorn"]?></li>
</section>
<section class="selected-movie">
    
    <h1 class=""><?=$result["name"]?></h1>

    <div class="buy-container">
        <div class="movie-img-container">
            <img src="<?= $BASE_URL?>img/filme-<?=$result["id"]?>.jpg" alt="<?=$result["name"]?>">
        </div>
        <div class="info-popcorn-container">
            <div class="movie-description-buy">
                <h2><?=$result["name"]?></h2>
                <h3>Categoria: <?=$result["category"]?></h3>
                <p>Sinopse: <?=$result["sinopse"]?></p>
            </div>
            <div class="chairs">
                <h3>Escolha seu(s) lugar(es):</h3>
                <form action="finally.php?id=<?=$result["id"]?>?<?=$_SESSION["popcorn"]?>" method="POST">
                <div class="chairs-container">
                    <?php foreach($chairResult as $chair): ?>
                        <label for="lugar"> <?= $chair["chair"]?> <input type="checkbox" name="selectedChairs[]" id="" value="<?= $chair["chair"]?>"></label>
                    <?php endforeach; ?>
                </div>
                
            </div>
            <div class="follow-buy">
                <button type="submit"> Finalizar </button>
            </div>
            </form>
        </div>
    </div>
</section>