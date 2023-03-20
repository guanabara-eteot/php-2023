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
    <main>
        <h1>Conversor de Moeda</h1>
        <?php
            $cotação = 5.20;
            $r = $_REQUEST["real"] ?? 0;
            $d = (float) $r / (float) $cotação;
            echo "<p>R$" . number_format($r, 2, ",", ".") . " correspondem a US$" . number_format($d, 2, ",", ".") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>