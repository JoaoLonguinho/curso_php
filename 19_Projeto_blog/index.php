<?php 
    include_once("templates/header.php");
?>

    <main> 
        <div id="title-container">
            <h1>Blog</h1>
            <p>Buscando os melhores artigos sobre a área de programação para você! </p>
        </div>
        <div class="main-container">
            <?php foreach($posts as $artigos): ?>
                <div id="posts-container">
                    <img src="<?=$BASE_URL?>/img/<?=$artigos['img']?>" alt="" class="post-img">
                    <a href="<?=$BASE_URL?>/post.php?id=<?=$artigos['id']?>">
                        <h2 class="post-tittle"><?= $artigos['title'] ?></h2>
                    </a>
                    <p class="posts-descriptions"><?= $artigos["description"] ?></p>
                    <div class="posts-tags">
                        <?php foreach($artigos["tags"] as $item): ?>
                            <li> <?= $item ?> </li>
                        <?php endforeach?>
                    </div>
                </div>
            <?php endforeach?>
        </div>         
    </main>

<?php 
    
    include_once("templates/footer.php");
?>