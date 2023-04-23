<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="img/imagem.svg" alt="imagem de pessoas se exercitando">
    <main>
        <h1>informe os seus dados</h1>
        <form action="calc.php" method="get">
            <div>
                <label for="altura" class="num">Altura<sub>(cm)</sub>
                <input type="number" name="altura" id="altura" required>
                </label>
            </div>
            <div>
                <label for="peso" class="num">Peso<sub>(kg)</sub>
                <input type="number" name="peso" id="peso" step="0.1" required>
                </label>
            </div>
            <div>
                <label for="sexo" id="sexo">Sexo</label>
                <label for="masculino">
                <input type="radio" name="sexo" id="masculino" required value="masculino" >
                masculino
                </label>
            
                <label for="feminino">
                <input type="radio" name="sexo" id="feminino" value="feminino" >
                feminino
                </label>
            </div>
            <div>
                <input type="submit" value="Calcular">
            </div>
        </form>
    </main>
</body>
</html>