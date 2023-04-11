<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteando números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios.</h1>
        <p>gerando um número aleatório entre 1 e 100</p>
        <form action="index.php" method="get">
            <button type="submit" onclick="reload()">Sortear</button>
        </form>
        <p>O valor gerado é:</p>
        <p class="numero">
            <?php 
            echo rand(0,100)
            ?>
        </p>
    </main>
    <script>
         function reload(){
            location.reload();
         } 
    </script>
</body>
</html>