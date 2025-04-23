<?php

require_once "templates/header.php";

?>

<section class="login-container">
    <section class="login-container-space">
        <section class="login">
            <form action="loginprocess.php" method="POST">
                <img src="" alt="">
                <h2>Entrar</h2>
                <input type="hidden" name="type" value="login">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="password">
                <button type="submit">Entrar</button>
            </form>
        </section>
        <div class="separator"></div>
        <section class="register">
            <form action="loginprocess.php" method="POST">
                <h2>Cadastrar</h2>
                <input type="hidden" name="type" value="register">
                <input type="text" name="name" id="name" placeholder="Seu nome">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="password">
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirmação de senha">
                <button type="submit">Cadastrar</button>
            </form>
        </section>
    </section>
</section>