<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <ul>
            <?php 
                $numero = $_GET["numero"] ?? 0;
                $antecessor = $_GET["numero"] - 1;
                $sucessor = $_GET["numero"] + 1;
                echo "<li>O antecessor de <strong>$numero</strong> é igual a: <strong>$antecessor</strong></li>";
                echo "<li>O sucessor de <strong>$numero</strong> é igual a: <strong>$sucessor</strong></li>";
            ?>
            <a href="index.html" class="botao">Voltar para a página anterior</a>
        </ul>
    </main>
</body>
</html>