<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="game" id="" placeholder="Nome do jogo">
        </div>
        <div>
            <input type="text" name="preco" id="" placeholder="Preço">
        </div>
        
        <div>
            <input type="checkbox" name="garantia[]" id="" value="leve"> Leve
        </div>
        <div>
            <input type="checkbox" name="garantia[]" id="" value="bonito"> Bonito
        </div>
        <div>
            <input type="checkbox" name="garantia[]" id="" value="otimizado"> Otimizado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</body>
</html>