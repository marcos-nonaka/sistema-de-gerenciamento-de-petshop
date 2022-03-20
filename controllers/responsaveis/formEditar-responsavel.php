<?php
    include_once "../../models/responsaveis/consultaEditarExcluir-responsavel.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro de Responsável</title>
    <link href="../../assets/css/style4.css" rel="stylesheet" />
</head>
<body>
    <h1>Editar Cadastro de Responsável</h1>
    <form action="../../models/responsaveis/editar-responsavel.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Responsável:</h2>
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" />
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" />
            <label id="label-formulario">Parentesco: </label>
            <input type="text" name="parentesco" id="parentesco" value="<?php echo $linha['parentesco'] ?>" />
            <hr />
        </div>
        <div id="campo">
            <a href="cadastro-responsavel.php"><input type="button" value="Voltar" /></a>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Salvar" />
        </div>
    </form>
</body>
</html>