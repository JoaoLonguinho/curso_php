<?php

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";
require_once "model/Product.php";
require_once "dao/ProductDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);
$product = new Product();
$productDao = new ProductDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();
$listOfProducts = $productDao->getProductsByUserId($user->id);

?>

<section class="main-profile-container">
    <div class="profile-card">
        <div class="profile-img-container" style="background-image: url('images/placeholder-profile.png');">

        </div>
        <div class="profile-info">
            <h2 class="profile-name"><?= $user->name ?></h2>
            <p class="profile-email"><?= $user->email ?></p>
        </div>
        <div class="profile-products">
            <?php if (empty($listOfProducts)): ?>
                <p>Você ainda não adicionou nenhum produto.</p>
                <a href="addproduct.php">Clique aqui para incluir.</a>
            <?php else: ?>
                <ul>Produtos adicionados: </ul>
                <?php foreach ($listOfProducts as $item): ?>
                    <li><?= $item->productName ?></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a class="btn-link" href="editprofile.php">Editar perfil</a>
    </div>
</section>