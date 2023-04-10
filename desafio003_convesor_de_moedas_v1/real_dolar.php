<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas V1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
            <h1>Conversor de moedas</h1>
            <p><strong>Real</strong><sub>(BRL)</sub> para <strong>Dolar</strong><sub>(USD)</sub></p>
        </section>
        <form action="real_dolar.php" method="get">
            <label for="valor">Valor em reais(BRL):</label>
            <label for="valor" class="moeda">R$:</label>
            <input type="number" name="valor" id="valor">
            <input type="submit" value="Converter">
        </form>
        <section class="resultado">
            <p>
                <?php 

                    $valor_real = $_GET['valor'];
                    $valor_dolar = 5.07;
                    $valor_dolar_convertido = round(($valor_real / $valor_dolar), 2);
                    echo "<strong>$valor_real Reais</strong> equivalem a <strong>$valor_dolar_convertido Dolares</strong>. O atual valor do dolar é <strong>R$:$valor_dolar</strong>.";
                ?>
            </p>
        </section>
    </main>
</body>
</html>