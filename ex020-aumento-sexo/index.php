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
        $nome = $_GET['nome'] ?? '';
        $sexo = $_GET['sexo'] ?? 'M';
        $sal = $_GET['sal'] ?? '0';
    ?>
    <main>
        <h1>Cadastro de Funcionário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?=$nome?>">
            
            <fieldset>
                <legend>Sexo</legend>
                <input type="radio" name="sexo" id="sexoM" value="M" <?=($sexo=='M')?'checked':''?>>
                <label for="sexoM">Masculino</label><br>
                <input type="radio" name="sexo" id="sexoF" value="F" <?=($sexo=='F')?'checked':''?>>
                <label for="sexoF">Feminino</label>
            </fieldset>

            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Dados informados pelo usuário</h2>
        <?php 
            $reaj = 0;
            if ($sexo == 'M') {
                $reaj = 10;
            } else if ($sexo == 'F') {
                $reaj = 14;
            }

            $nsal = $sal + ($sal * $reaj/100);
            echo "<p>$nome ganhava R\$" . number_format($sal, 2, ',', '.');
            echo "e depois de ganhar $reaj% de aumento, vai passar a ganhar R\$";
            echo number_format($nsal, 2, ',', '.') . "</p>";
        ?>
    </section>
</body>
</html>