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
?>

<section class="main-profile-container">
    <div class="profile-card">
        <div class="profile-img-container" style="background-image: url('images/placeholder-profile.png');">

        </div>
        <div class="profile-info">
            <form action="editprofileprocess.php" class="edit-profile-form" method="POST">
                <input type="text" name="name" id="name" value="<?= $user->name ?>">
                <input type="email" name="email" id="email" value="<?= $user->email ?>">
                <button type="submit">Atualizar dados</button>
            </form>
        </div>
       
    </div>
</section>