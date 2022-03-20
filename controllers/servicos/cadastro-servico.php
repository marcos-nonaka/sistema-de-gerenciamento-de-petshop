<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Serviços</title>
    <link href="../../assets/css/style3.css" rel="stylesheet" />
</head>
<body>
    <h1>Cadastro de Serviços</h1>
    <form action="../../models/servicos/dados-servico.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Cadastro de novo serviço:</h2>
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" />
            <br /><br />
            <label id="label-formulario">Descrição: </label>
            <textarea cols="30" rows="10" name="descricao" id="descricao"></textarea>
            <br /><br />
            <label id="label-formulario">Valor: </label>
            <input type="number" name="valor" id="valor" />
            <hr />
        </div>
        <div id="campo">
            <a href="../../index.html"><input type="button" value="Voltar" /></a>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Salvar" />
            <hr>
        </div>
        <div>
            <?php
                include_once "../../views/servicos-cadastrados.php";
            ?>
        </div>
     </form>
</body>
</html>