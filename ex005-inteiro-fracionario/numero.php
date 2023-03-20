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
        <h1>Analisando o número</h1>
        <?php 
            $n = $_REQUEST["num"] ?? 0;
            $i = (int) $n;
            $f = $n - $i;
            echo "<p>Analisando o número <strong>". number_format($n, 2, ",", ".")."</strong></p>";
            echo "<p>Parte Inteira: <strong>$i</strong></p>";
            echo "<p>Parte Fracionária: <strong>". number_format($f, 2, ",", ".") ."</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>