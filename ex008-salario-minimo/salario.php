<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Elementos da Divisão</h1>
        <?php 
            $mínimo = 1302.00;
            $salário = $_REQUEST["sal"] ?? 0;
            $resp = $salário / $mínimo;
            echo "<p>O salário mínimo atual é de R\$". number_format($mínimo, 2, ",", ".")."</p>";
            echo "<p>Seu salário atual é de R\$". number_format($salário, 2, ",", ".")."</p>";
            echo "<p>Logo, você ganha <strong>". number_format($resp, 2, ",", ".")." salários mínimos</strong>.</p>";     
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>