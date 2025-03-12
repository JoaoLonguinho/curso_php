<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
    
?>

<h1 class="post-title"><?= $currentPost['title'] ?></h1>
<section class="post-page-container">
    <article class="post-container">
            <div class="img-post">
                <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="">
            </div>
            <div class="posts-tags">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                            <li><?=$tag ?></li>
                    <?php endforeach; ?>
            </div>
            <p> <?= $currentPost['description'] ?> </p>
        </article>
        <article class="categories-container">
            <ul> <h3>Categorias</h3>
                <?php foreach($categories as $cate): ?>
                        <li class="categories-list"><a href="#"><?= $cate ?></a></li>
                <?php endforeach; ?>
            </ul>
        </article>
    </section>

<?php 
    
    include_once("templates/footer.php");
?>