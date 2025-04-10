<?php

include_once "templates/header.php";
include_once "dao/gameDao.php";
include_once "model/Game.php";

$gameDao = new GameDao($conn);
$game = new Game();

$gameList = $gameDao->bringGames();

?>
<section class="nav-header">
    <h1 class="main-title">GameBox</h1>
    <a href="addGame.php" class="header-link">Adicionar um novo jogo</a>
</section>
<section>
    <h2 class="second-tittle">Avalie:</h2>
</section>
<section class="home-content">
    <?php if (count($gameList) == 0): ?>
        <h1 class="third-title">Ainda não existem jogos cadastrados.</h1>
    <?php else: ?>
        <?php foreach ($gameList as $game): ?>
            <div class="game-card">
                <?php if (empty($game->image)): ?>
                    <div class="game-img" style="background-image: url('img/games/placeholder.jpg');">
                        <form action="gameview.php" method="GET">
                            <input type="hidden" name="gameView" value="<?= $game->id ?>">
                            <input type="hidden" name="gameId" value="<?= $game->id ?>">
                            <button class="view-btn" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                        <form action="editgame.php" method="POST">
                            <input type="hidden" name="gameToEdit" value="<?= $game->id ?>">
                            <input type="hidden" name="gameId" value="<?= $game->id ?>">
                            <button class="edit-btn" type="submit">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </form>
                        <form action="deletegameprocess.php" method="POST">
                            <input type="hidden" name="type" value="remove">
                            <input type="hidden" name="gameToDelete" value="<?= $game->id ?>">
                            <button class="remove-btn" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                <?php else: ?>
                    <div class="game-img" style="background-image: url('img/games/<?= $game->image ?>');">
                        <form action="gameview.php" method="GET">
                            <input type="hidden" name="gameView" value="<?= $game->id ?>">
                            <input type="hidden" name="gameId" value="<?= $game->id ?>">
                            <button class="view-btn" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                        <form action="editgame.php" method="POST">
                            <input type="hidden" name="gameToEdit" value="<?= $game->id ?>">
                            <input type="hidden" name="gameId" value="<?= $game->id ?>">
                            <button class="edit-btn" type="submit">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </form>
                        <form action="deletegameprocess.php" method="POST">
                            <input type="hidden" name="type" value="remove">
                            <input type="hidden" name="gameToDelete" value="<?= $game->id ?>">
                            <button class="remove-btn" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
                <div class="game-info-box">
                    <h2 id="gameId">ID: <?= $game->id ?></h2>
                    <h2 class="game-title"><?= $game->title ?></h2>
                    <p><?= $game->description ?></p>
                    <?php if (isset($game->rating)): ?>
                        <p class="rating"><?= $game->rating ?> <img src="img/star.png" alt="" class="formed-stars"></p>
                    <?php else: ?>
                        <p>O jogo ainda não possui nota.</p>
                    <?php endif; ?>
                    <ul class="opnion-container">
                        <?php for ($numberOfStars = 1; $numberOfStars < 6; $numberOfStars++): ?>
                            <form action="ratingprocess.php" method="POST">
                                <input type="hidden" name="type" value="rating">
                                <input type="hidden" name="gameId" value="<?= $game->id ?>">
                                <input type="hidden" name="rating" value="<?= $numberOfStars ?>">
                                <button type="submit" class="stars-container"><img src="img/star.png" alt="" class="stars"></button>

                            </form>
                        <?php endfor ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
</main>
</body>

</html>