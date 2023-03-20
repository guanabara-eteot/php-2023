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
            $dividendo = $_REQUEST["d1"] ?? 0;
            $divisor = $_REQUEST["d2"] ?? 1;
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            echo "<p>Os elementos da divisão são:</p>";
            echo "<ul><li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>