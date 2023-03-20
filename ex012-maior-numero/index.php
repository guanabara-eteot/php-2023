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
    <?php 
        $n1 = $_GET['v1'] ?? 0;
        $n2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Maior Valor</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$n1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$n2?>">
            <input type="submit" value="Comparar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            if ($n1 > $n2) {
                echo "<p>Primeiro valor ($n1) maior que o segundo ($n2)</p>";
            } elseif ($n2 > $n1) {
                echo "<p>Segundo valor ($n2) maior que o primeiro ($n1)</p>";
            } else {
                echo "<p>Os dois valores são iguais ($n1)</p>";
            }
        ?>
    </section>
</body>
</html>