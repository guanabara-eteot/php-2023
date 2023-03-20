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
        $sexo = $_POST['sexo'] ?? 'M';
        // $sexo = (isset($_POST['sexo'])?$_POST['sexo']:'M');
        $senha = $_POST['senha'] ?? '';
        $vsenha = $_POST['vsenha'] ?? '';
        $estado = $_POST['estado'] ?? 'RJ';
        $data = $_POST['data'] ?? '';
    ?>
    <main>
        <h1>Preenchimento de Formulários</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <fieldset>
                <legend>Sexo</legend>
                <input type="radio" name="sexo" id="sexoM" value="M" 
                <?=($sexo=='M')?'checked':''?> >
                <label for="sexoM">Masculino</label><br>
                <input type="radio" name="sexo" id="sexoF" value="F"
                <?=($sexo=='F')?'checked':''?> >
                <label for="sexoF">Feminino</label>
            </fieldset>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?=$senha?>">
            <label for="vsenha">Verifique Senha</label>
            <input type="password" name="vsenha" id="vsenha" value="<?=$vsenha?>">
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="RJ" <?=$estado=='RJ'?'selected':''?>>Rio de Janeiro</option>
                <option value="SP" <?=$estado=='SP'?'selected':''?>>São Paulo</option>
                <option value="MG" <?=$estado=='MG'?'selected':''?>>Minas Gerais</option>
                <option value="ES" <?=$estado=='ES'?'selected':''?>>Espirito Santo</option>
            </select>
            <label for="data">Dia do Cadastro</label>
            <input type="date" name="data" id="data" value="<?=$data?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Dados informados pelo usuário</h2>
        <?php 
            echo "<ul>";
            echo "<li>Sexo: $sexo</li>";
            echo "<li>Senha: $senha</li>";
            echo "<li>Senha verificada: $vsenha</li>";
            if ($senha === $vsenha) {
                echo "<li>As senhas coincidem!</li>";
            } else {
                echo "<li><strong>ERRO! As senhas não coincidem!</strong></li>";
            }
            echo "<li>Estado: $estado</li>";
            echo "<li>Data: ". date('d/M/Y', strtotime($data))."</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>