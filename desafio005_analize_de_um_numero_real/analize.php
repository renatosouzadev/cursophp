<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analize de um número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Análize de 
            <strong>
                    <?php
                        $numero = $_GET["numero"];
                        echo $numero; 
                    ?>
            </strong>
        </h2>
        <ul>
            <li>A parte inteira de <strong><?=$numero?></strong> é: <strong><?= floor($numero)?></strong></li>
            <li>A parte decimal de <strong><?=$numero?></strong> é: <strong><?php $dec= $numero - floor($numero); echo $dec;?></strong></li>
        </ul>
    </main>
</body>
</html>