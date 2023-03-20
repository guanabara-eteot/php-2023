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
        $pto = $_GET['pto'] ?? '0';
        $turno = $_GET['turno'] ?? 'M';
    ?>
    <main>
        <h1>Cadastro de Aluno</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?=$nome?>">
            
            <label for="pto">Pontos obtidos</label>
            <input type="number" name="pto" id="pto" step="1" value="<?=$pto?>">

            <label for="turno">Turno</label>
            <select name="turno" id="turno">
                <option value="M" <?=$turno=='M'?'selected':''?>>Manhã</option>
                <option value="T" <?=$turno=='T'?'selected':''?>>Tarde</option>
                <option value="N" <?=$turno=='N'?'selected':''?>>Noite</option>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Analisando dados do aluno</h2>
        <?php 
            if ($turno == 'M' || $turno == 'T') {
                $meta = 100;
            } else if ($turno == 'N') {
                $meta = 70;
            }

            $dif = abs($pto - $meta);
        
            if ($pto < $meta) {
                echo "<p>REPROVADO: $nome tinha a meta de $meta pontos e não atingiu. Faltam $dif pontos pra passar.</p>";
            }  else if ($pto > $meta) {
                echo "<p>APROVADO: $nome conseguiu ultrapassar a meta de $meta pontos e conseguiu $dif pontos a mais.</p>";
            } else if ($pto == $meta) {
                echo "<p>APROVADO: $nome conseguiu exatamente a meta de $meta pontos.</p>";
            }
        ?>
    </section>
</body>
</html>