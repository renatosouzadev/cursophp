<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['divd'] ?? 0;
        $divisor = $_GET['divs'] ?? 1;

        $resto = $dividendo % $divisor;
        $res = intdiv($dividendo, $divisor);
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="divd">Dividendo</label>
            <input type="number" name="divd" id="divd" step="0.001" required value="<?=$dividendo?>">

            <label for="divs">Divisor:</label>
            <input type="number" name="divs" id="divs" required value="<?=$divisor?>" min="1">

            <input type="submit" value="analizar">
        </form>
        <section class="res">
            <h1>Estrutura da divisão:</h1>
            <div>
                <div class="div" id="dividendo">
                    <h2><?=$dividendo?></h2>
                </div>
                <div class="div" id="divisor">
                    <h2><?=$divisor?></h2>
                </div>
            </div>

            <div id="direitadadiv">
                <div class="div" id="resto">
                    <h2><?=$resto?></h2>
                </div>
                <div class="div" id="res">
                    <h2><?=$res?></h2>
            </div>
            </div>
        </section>
    </main>
</body>
</html>