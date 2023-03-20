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
        <h1>Terça parte do número</h1>
        <?php 
            $n = $_REQUEST["num"] ?? 0;
            $t = $n / 3;
            echo "<p>A terça parte de $n é igual a ". number_format($t, 2, ",", ".").".</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>