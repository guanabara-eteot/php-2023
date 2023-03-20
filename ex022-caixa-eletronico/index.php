<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            width: 100px;
        }
    </style>
</head>
<body>
    <?php 
        $tot = $_GET["saque"] ?? 0; 
    ?>
    <main>
        <h1>Teste</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Valor do Saque (R$) </label>
            <input type="number" name="saque" id="saque" step="1" value="<?=$tot?>">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque realizado</h2>
        <?php 
           
            $resta = $tot;
            echo "<p>Saque solicitado de R\$" . number_format($tot, 2, ",", ".") . "</p>";
            echo "<ul>";

            $cin = intdiv($resta, 50);
            $resta = $resta % 50;
            if ($cin > 0) {
                echo "<li><img class='nota' src='imagens/50-reais.jpg'> x $cin</li>";
            }

            $vin = intdiv($resta, 20);
            $resta = $resta % 20;
            if ($vin > 0) {
                echo "<li><img class='nota' src='imagens/20-reais.jpg'> x $vin</li>";
            }

            $dez = intdiv($resta, 10);
            $resta = $resta % 10;
            if ($dez > 0) {
                echo "<li><img class='nota' src='imagens/10-reais.jpg'> x $dez</li>";
            }

            $ci = intdiv($resta, 5);
            $resta = $resta % 5;
            if ($ci > 0) {
                echo "<li><img class='nota' src='imagens/5-reais.jpg'> x $ci</li>";
            }

            $total = $cin * 50 + $vin * 20 + $dez * 10 + $ci * 5;

            echo "</ul>";

            echo "<p>Total do saque: R\$" . number_format($total, 2, ",", ".") . ". Ainda ficou faltando entregar R\$" . number_format($resta, 2, ",", ".") . ".</p>";
        ?>
    </section>
</body>
</html>