<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Somando os números</h1>
        <?php
            $v1 = (int) $_GET["n1"] ?? 0;
            $v2 = (int) $_GET["n2"] ?? 0;
            $s = $v1 + $v2;
            echo "<p>A soma entre $v1 e $v2 é igual a $s</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>