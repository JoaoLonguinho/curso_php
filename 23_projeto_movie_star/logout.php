<?php
    require_once "templates/header.php";
    
    if($userDao){ //Verifica se está logado
        $userDao->destroyToken();
    }