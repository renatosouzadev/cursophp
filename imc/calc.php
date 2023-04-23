<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="img/imagem.svg" alt="imagem de pessoas se exercitando">
    <main>
        <?php 
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
            $imc = $peso / ($altura / 100) ** 2;
            
            if($imc < 16.5)     {$cat = 'Seu peso está severamente abaixo do normal';}
            elseif($imc < 18.5) {$cat = 'Seu peso está abaixo do normal';}
            elseif($imc < 25)   {$cat = 'Seu peso está normal';}
            elseif($imc < 30)   {$cat = 'Você é pré-obeso';}
            elseif($imc < 35)   {$cat = 'Você tem Obesidade classe I';}
            elseif($imc < 30)   {$cat = 'Você tem Obesidade classe II';}
            else                {$cat = 'Você tem Obesidade classe III';};

            echo "<p>$cat</p>";
        ?>
    </main>
</body>
</html>