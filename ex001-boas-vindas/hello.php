<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Testando o PHP</h1>
        <?php
            $nome = $_REQUEST["nome"] ?? "desconhecido";
            $ano = date("Y");
            echo "<p>Muito prazer, <strong>$nome</strong>! Espero que aprenda PHP em $ano!</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>