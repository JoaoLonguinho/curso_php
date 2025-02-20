<?php

    $textoHTML = "<p> Testando </p> <div> testando novamente </div> ";

    echo $textoHTML;

    $salvarTextoBanco = strip_tags($textoHTML);

    echo $salvarTextoBanco;