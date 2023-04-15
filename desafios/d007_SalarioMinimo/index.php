<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario(s) minimo(s) </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = $_GET["sal"] ?? 0;
    $sal_min = intdiv($salario, 1380);
    $sal_res = $salario - ($sal_min * 1380);
    $res = "<strong>$sal_min salário(s) minimo(s)</strong> e <strong>R$ " . number_format($sal_res, 2, ",",".") . "</strong>.";
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="sal" id="sal" value="<?= $salario ?>" step="0.01" required>
            <input type="submit" value="Calcular">
        </form>
        <div class="res">
            <p>considerando o salario minimo de <strong>R$ 1.380,00.</strong>, você recebe mensalmente <?=$res?></p>
        </div>
    </main>
</body>
</html>