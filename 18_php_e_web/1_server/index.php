<?php

print_r($_SERVER);

echo $_SERVER['HTTP_HOST'];

if($_SERVER['SERVER_NAME'] == 'localhost'){
    echo "acessando localmente";
}