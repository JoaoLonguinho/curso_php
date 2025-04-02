<?php
require_once "templates/header.php";
require_once "dao/userDAO.php";

$user = new User();

$userDao = new UserDao($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$fullName = $user->getFullName($userData);

if ($userData->image == "") {
    $userData->image = "user.png";
}
?>
<div id="main-container" class="container-fluid edit-profile-page">
    <div class="col-md-12">
        <form action="<?= $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="type" value="update">
            <div class="row">
                <div class="col-md-4">
                    <h1><?= $fullName ?></h1>
                    <p>Altere seus dados no formulário abaixo:</p>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome:"
                            value="<?= $userData->name ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control"
                            placeholder="Digite o seu sobrenome:" value="<?= $userData->lastname ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" readonly id="email" class="form-control disabled"
                            placeholder="Digite o seu e-mail:" value="<?= $userData->email ?>">
                    </div>
                    <input type="submit" class="btn card-btn" value="Alterar">
                </div>
                <div class="col-md-4">
                    <div id="profile-image-container"
                        style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')"></div>
                    <div class="form-group">
                        <label for="image">Foto:</label>
                        <input type="file" name="image" id="image" class="form-control-file" value="<?= $userData->image ?>">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea name="bio" class="form-control" id="bio" rows="5"
                            placeholder="Conte quem você é, o que faz e onde trabalha..."> <?= $userData->bio ?></textarea>
                    </div>
                </div>
            </div>
        </form>
        <div class="row" id="change-password-container">
            <div class="col-md-4">
                <h2>Alterar a senha:</h2>
                <p class="page-description">
                    Digite a nova senha e confirme, para alterar sua senha:
                </p>
                <form action="<?= $BASE_URL ?>user_process.php" method="POST">
                    <input type="hidden" name="type" value="changepassword">
                    <div class="form-group">
                        <label for="password">Nova senha:</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Digite a sua nova senha">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirme a nova senha:</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control"
                            placeholder="Digite a sua nova senha">
                    </div>
                    <input type="submit" class="btn card-btn" value="Alterar Senha">
                </form>
            </div>
        </div>
    </div>
</div>

<?php

require_once "templates/footer.php";

?>