<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversão R$ -> US$</h1>
        <?php
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'02-24-2023\'&$format=json&$select=cotacaoCompra';
            $arquivo = file_get_contents($url);
            $dado = json_decode($arquivo, true);
            $cotacao = (float) $dado["value"][0]["cotacaoCompra"];
            $real = $_REQUEST["real"] ?? 0;
            $dolar = $real / $cotacao;
            echo "<p>Com R$".number_format($real,2, ",", ".")." dá pra comprar US$" . number_format($dolar, 2, ",", ".") . ".</p>";
            echo "<p>Cotação obtida no site do <a href='https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios' target='_blank'>Banco Central</a>.</p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>
</html>