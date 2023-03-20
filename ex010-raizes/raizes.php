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
        <h1>Raízes de um número</h1>
        <?php 
            $n = $_REQUEST["num"] ?? 0;
            $rq = sqrt($n);
            $rc = $n ** (1/3);
            echo "<p>A <strong>raiz quadrada</strong> de $n é ". number_format($rq, 2, ",", ".")."</p>";     
            echo "<p>A <strong>raiz cúbica</strong> de $n é ". number_format($rc, 2, ",", ".")."</p>";     
              
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>