<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soreador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="titulo">
            <h1>Sorteador de números</h1>
        </section>
        <form action="sort.php" method="get">
            <div class="min">
                <label for="min" value="<?php echo $_GET['min'] ?? ''; ?>">Valor minímo:</label>
                <input type="number" name="min" id="min">
            </div>
            <div class="max">
                <label for="max" value="<?php echo $_GET['max'] ?? ''; ?>">Valor maximo:</label>
                <input type="number" name="max" id="max">
            </div>
            <div class="res">
                <section class="res">
                    <?php 
                        $min = intval($_GET["min"] ?? 0);
                        $max = intval($_GET["max"] ?? 0);
                        echo "<p>O número sorteado entre <strong>$min</strong> e <strong>$max</strong> foi: <strong>" . mt_rand($min, $max) . "</strong></p>";
                    ?>
                </section>
                <input type="submit" value="Sortear" style="position: relative; top: 35px;">
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>