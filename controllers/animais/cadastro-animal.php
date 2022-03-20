<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
    <link href="../../assets/css/style2.css" rel="stylesheet" />
</head>
<body>
    <h1>Cadastro de Animais</h1>
    <form action="../../models/animais/dados-animal.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Cadastro de novo animal:</h2>
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" />
            <br /><br />
            <label id="label-formulario">Raça: </label>
            <input type="text" name="raca" id="raca" />
            <label id="label-formulario">Peso: </label>
            <input type="number" name="peso" id="peso" />
            <label id="label-formulario">kg. - </label>
            <label id="label-formulario">Porte: </label>
            <input type="text" name="porte" id="porte" />
            <?php
                include_once "../../views/codigo-cliente.php";
            ?>
            <hr />
        </div>
        <div id="campo">
            <a href="../clientes/cadastro-cliente.php"><input type="button" value="Voltar" /></a>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Salvar" />
            <hr>
        </div>
        <div>
            <?php
                include_once "../../views/animais-cadastrados.php";
            ?>
        </div>
    </form>
</body>
</html>