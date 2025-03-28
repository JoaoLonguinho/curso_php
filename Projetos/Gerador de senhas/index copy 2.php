<?php
    $newPassString = "";
    $newPassSize = 8;
    if(isset($_POST['nChar'])){
            if(isset($_POST['generate'])){
                $alphabet = range('A', 'Z'); #Array alfabeto
                $alphabet_lower = range('a', 'z'); #Colocando tudo em minúsculo
                $numbers = range(0, 9); #Array números
                $special_chars = str_split('!@#$%^&*()-_=+[]{}|;:",.<>?/'); #Array caractétes especiais
                
                $all_chars = array_merge($alphabet, $alphabet_lower, $numbers, $special_chars); #Array com alfabeto, números e cacteres especiais
                $newPass = [];
                for($i = 0; $i < $_POST['nChar']; $i++){ # Laço que roda 8 vezes (Tamanho da senha)
                    $random_number = rand(1, count($all_chars) - 1); # Váriavel que é gerada 8 vezes (conforme o loop)
                        $newPass[] = $all_chars[$random_number]; # Incremento do Array utilizando o $all_chars conforme a posição indicada pelo $random_number
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
</head>
<body>
    <main>
        <h1>Gerador de senhas</h1>
        <form action="index.php" method="POST">
            <div>
                <label for="nChar">Número de Carácteres: </label><input type="number" name="nChar" min="8" max="16" value=<?php echo $newPassSize ?>>
            </div>
            <div>
                <input type="text" name="passGenerated" placeholder="Sua senha será gerada aqui." value=<?php echo htmlspecialchars($newPassString)?> >
                <input type="submit" name="generate" value="Gerar nova senha"> <!-- Botão de gerar nova senha -->
            </div>
        </form>
    </main>
</body>
</html>