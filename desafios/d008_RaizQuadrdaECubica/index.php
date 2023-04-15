<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz de um numero</title>
</head>
<body>
    <?php 
    $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" required value="<?=$num?>">
            <input type="submit" value="Calcular raizes">
        </form>
        <div class="res">
            <h2>resultado final</h2>
            <ul>
                <li>A raiz quadrada de <strong><?=$num?></strong> é <strong><?=$num ** (1/2)?></strong></li>
                <li>A raiz cubica de <strong><?=$num?></strong> é <strong><?=$num ** (1/3)?></strong></li>
            </ul>
        </div>
    </main>
</body>
</html>