<pre>
<?php 
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

    //obitem cotação, data e hora
    $cotacaoDeCompra = $dados["value"][0]["cotacaoCompra"];
    $cotacaoDeVenda  = $dados["value"][0]["cotacaoVenda"];
    $hora = $datetime->format("H:i:s");
    $data = $datetime->format("d/m/Y");
    
    // Exibe a data, cotação de compra e venda
    echo "<p>Data da cotação: <strong>$data</strong> <br></p>";
    echo "<p>Hora da cotação: <strong>$hora</strong> <br></p>";
    echo "<p>Cotação de compra: <strong>$cotacaoDeCompra</strong></p>";
    echo "<p>Cotção decompra: <strong>$cotacaoDeVenda</strong></p>";
?>
</pre>