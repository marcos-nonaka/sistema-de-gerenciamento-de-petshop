<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Responsáveis</title>
    <link href="../../assets/css/style4.css" rel="stylesheet" />
</head>
<body>
    <h1>Cadastro de Responsáveis</h1>
    <form action="../../models/responsaveis/dados-responsavel.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Responsável:</h2>
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" />
            <label id="label-formulario">Parentesco: </label>
            <input type="text" name="parentesco" id="parentesco" />
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
	            include_once "../../views/responsaveis-cadastrados.php";
            ?>       
        </div>
    </form>
</body>
</html>