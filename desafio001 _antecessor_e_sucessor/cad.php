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
                $numero = $_GET["numero"];
                $antecessor = $_GET["numero"] - 1;
                $sucessor = $_GET["numero"] + 1;
                echo "<li>O antecessor de $numero é igual a: $antecessor</li>";
                echo "<li>O sucessor de $numero é igual a: $sucessor</li>";
            ?>
        </ul>
    </main>
</body>
</html>