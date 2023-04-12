<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiamento de moedas com API do BCB</title>
</head>
<body>
    <main>
    <h1>Compra e venda de Doláres</h1>
        <form action="convet.php" method="get">
            <section class="bs">
                <input type="radio" name="bs" value="comprar" id="comprar" required>
                <label for="comprar">Comprar</label>
                <input type="radio" name="bs" value="vender" id="vender">
                <label for="ender">Vender</label>
            </section>
            <section class="valor">
                <label for="valor">Valor:</label>
                <input type="number" name="valor" required>
            </section>
            <input type="submit" value="converter">
        </form>
        <div class="res">
            <?php
                //valor do usuario
                $valor = $_GET["valor"];
                //busca a resposta do rad 
                $bs = $_GET["bs"];

                //define a data de inicio da pesquisa para 7 dias antes da data atual e o fim para a data atual
                $inicio = date('m-d-Y', strtotime("-7 days"));
                $fim = date('m-d-Y');

                //importa os dados do banco central do brasil
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

                //tranforma os dados em uma aray
                $dados = json_decode(file_get_contents($url), true);

                //define a data e hora da cotação
                $dataEHora = $dados["value"][0]["dataHoraCotacao"];

                // Criando um objeto DateTime a partir da string, com o formato especificado
                $datetime = DateTime::createFromFormat("Y-m-d H:i:s.u", $dataEHora);

                $hora = $datetime->format("H:i:s");
                $data = $datetime->format("d/m/Y");

                echo "<p>De acordo com a ultima atualizaçõa de dados do <strong>Banco central do Brasil</strong>, feita em <strong>$data</strong> às <strong>$hora</strong> horas, ";

                //Defifine o que acontece em caso de compra ou venda
                if($bs == "comprar"){
                    //define a cotação de compra
                    $cotacaoDeCompra = $dados["value"][0]["cotacaoCompra"];

                    //mostra o resultado na tela
                    echo "a cotação de compra do dolar é de <strong>R$ $cotacaoDeCompra</strong> e os seus <strong>R$ " . number_format(str_replace(",", ".", $valor), 2, ",", ".") . " </strong> valem <strong>US$ " . number_format(str_replace(",", ".", ($valor / $cotacaoDeCompra)), 2, ",", ".") . "</strong></p>";
                }else{
                    $cotacaoDeVenda  = $dados["value"][0]["cotacaoVenda"];
                    //mostra o resultado na tela
                    echo "a cotação de venda do dolar é de <strong>R$ $cotacaoDeVenda</strong> e os seus<strong> US$ " . number_format(str_replace(",", ".", $valor), 2, ",", ".") . " </strong> valem<strong> R$ " . number_format(str_replace(",", ".", ($valor * $cotacaoDeVenda)), 2, ",", ".") . "</strong></p>";
                }
            ?>
        </div>
    </main>
</body>
</html>