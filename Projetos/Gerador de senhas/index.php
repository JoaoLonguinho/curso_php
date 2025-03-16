<?php
    $newPassString = "";
    $newPassSize = 16;
    if(isset($_POST['nChar'])){
            if(isset($_POST['generate'])){
                $alphabet = range('A', 'Z'); #Array alfabeto
                $alphabet_lower = range('a', 'z'); #Colocando tudo em minúsculo
                $numbers = range(0, 9); #Array números
                $special_chars = str_split('!@#$%^&*()-_=+[]{}|;:",.<>?/'); #Array caractétes especiais
                
                $full_alphabet = array_merge($alphabet, $alphabet_lower);
                $alphaAndNum = array_merge($full_alphabet, $numbers);
                $alphabSpecial = array_merge($full_alphabet, $special_chars);
                $numSpecial = array_merge($numbers, $special_chars);
                $all_chars = array_merge($full_alphabet, $numbers, $special_chars); #Array com alfabeto, números e cacteres especiais
                $newPass = [];
                
                for($i = 0; $i < $_POST['nChar']; $i++){ # Laço que roda 8 vezes (Tamanho da senha)
                    
                    if(isset($_POST['option'])){
                        # PAREI AQUIIIII, PRA DESENVOLVER A VEERSÃO COM APENAS LETRAS, LETRAS E NÚMEROS E TUDO.
                        if($_POST["option"] == "letters"){
                            $random_number = rand(1, count($full_alphabet) - 1); # Apenas letras
                            $newPass[] = $full_alphabet[$random_number];

                        }
                        else if($_POST["option"] == "numbers"){
                            $random_number = rand(1, count($numbers) - 1); # Números
                            $newPass[] = $numbers[$random_number];
                        }
                        else if($_POST["option"] == "letters and numbers"){
                            $random_number = rand(1, count($alphaAndNum) - 1); # Letras e números
                            $newPass[] = $alphaAndNum[$random_number];
                        }
                        else if($_POST["option"] == "letters and specials"){
                            $random_number = rand(1, count($alphabSpecial) - 1); # Letras e caracteres especiais
                            $newPass[] = $alphabSpecial[$random_number];
                        }
                        else if($_POST["option"] == "numbers and specials"){
                            $random_number = rand(1, count($numSpecial) - 1); # Numeros e caracteres
                            $newPass[] = $numSpecial[$random_number];
                        }
                        else if($_POST["option"] == "all"){
                            $random_number = rand(1, count($all_chars) - 1); # tudo
                            $newPass[] = $all_chars[$random_number];
                        }
                    }
                    else{
                        $_POST['option'] = "all";
                    }
                        
                }
                $newPassString = implode("", $newPass);
                $newPassSize = $_POST['nChar'];
            }
            else {
                $newPassString = "";
            }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senhas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Gerador de senhas</h1>
        <form action="index.php" method="POST">
            <div class="first-content">
                <label for="nChar">Número de Carácteres: </label><input type="range" id="charNum" name="nChar" min="8" max="16" value=<?php echo $newPassSize ?> oninput="updateValue(this.value)"> <span id="charNumSelected"> <?php echo $newPassSize ?> </span>
            </div>
            <div class="options">
                <input type="radio" name="option" id="" value="all" <?php if (isset($_POST['option']) && $_POST['option'] == 'all') echo 'checked'; ?> checked > Letras, números e caracteres especiais <br/>
                <input type="radio" name="option" id="" value="letters" <?php if (isset($_POST['option']) && $_POST['option'] == 'letters') echo 'checked'; ?>> Apenas letras <br/>
                <input type="radio" name="option" id="" value="numbers" <?php if (isset($_POST['option']) && $_POST['option'] == 'numbers') echo 'checked'; ?>> Apenas números<br/>
                <input type="radio" name="option" id="" value="letters and numbers" <?php if (isset($_POST['option']) && $_POST['option'] == 'letters and numbers') echo 'checked'; ?>> Letras e números <br/>
                <input type="radio" name="option" id="" value="letters and specials" <?php if (isset($_POST['option']) && $_POST['option'] == 'letters and specials') echo 'checked'; ?>> Letras e caracteres especiais <br/>
                <input type="radio" name="option" id="" value="numbers and specials" <?php if (isset($_POST['option']) && $_POST['option'] == 'numbers and specials') echo 'checked'; ?>> Números e caracteres especiais <br/>
            </div>
            <div class="finally-container">
                <input type="submit" name="generate" value="Gerar nova senha"> <!-- Botão de gerar nova senha -->
                <input type="text" name="passGenerated" placeholder="Sua senha será gerada aqui." value=<?php echo htmlspecialchars($newPassString)?> >
            </div>
        </form>
    </main>
    <script>
        function updateValue(value) {
            document.getElementById("charNumSelected").textContent = value;
        }
    </script>
</body>
</html>