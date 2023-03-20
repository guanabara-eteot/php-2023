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
        <h1>Média Anual</h1>
        <?php 
            $d = $_REQUEST["disc"] ?? "desconhecido";
            $n1 = $_REQUEST["n1"] ?? 0;
            $n2 = $_REQUEST["n2"] ?? 0;
            $n3 = $_REQUEST["n3"] ?? 0;
            $m = ($n1 + $n2 + $n3) / 3;
            echo "<p>Na disciplina <strong>$d</strong> o aluno conseguiu a média anual de <strong>". number_format($m, 1, ",", ".")."</strong> pontos.</p>";     
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>