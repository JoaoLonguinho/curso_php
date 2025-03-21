<?php
    include_once("templates/header.php");
?>
<main> 
    <section class="movies">
        <h1>Onde a aventura vai do começo ao fim em poucas horas</h1>
        <div class="catalog">
            <?php foreach($result as $movie): ?>
                <div class="movie-catalog-container">
                    <div>
                        <h2 class="movie-name"><?=$movie["name"]?></h2>
                        <h3 class="movie-category"> Categoria: <?=$movie["category"]?></h3>
                        <h3 class="movie-age"> Classificação indicativa: <?=$movie["classificacao_indicativa"]?></h3>
                        <p class="movie-description"> Sinopse: <?=$movie["sinopse"]?></p>
                    </div>
                    <div>
                        <form class="btn-buy-form" action="comprar.php?id=<?=$movie["id"]?>" method="POST">
                            <input type="hidden" name="id" value="<?=$movie["id"]?>">
                            <input type="hidden" name="name" value="<?=$movie["name"]?>">
                            <input type="hidden" name="category" value="<?=$movie["category"]?>">
                            <input type="hidden" name="classificacao_indicativa" value="<?=$movie["classificacao_indicativa"]?>">
                            <input type="hidden" name="sinopse" value="<?=$movie["sinopse"]?>">
                            <button type="submit" class="btn-buy">Selecionar filme</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>