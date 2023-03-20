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
        $min = $_REQUEST["min"] ?? 0;
        $max = $_REQUEST["max"] ?? 10;
    ?>
    <main>
        <h1>Sorteador de números</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="min">Mínimo</label>
            <input type="number" name="min" id="min" value="<?=$min?>">
            <label for="max">Máximo</label>
            <input type="number" name="max" id="max" value="<?=$max?>">
            <input type="submit" value="Gerar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $num = rand($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max.</p>";
            echo "<p>O número escolhido foi...</p>";
            echo "<button>$num</button>"
        ?>
    </section>
</body>
</html>
