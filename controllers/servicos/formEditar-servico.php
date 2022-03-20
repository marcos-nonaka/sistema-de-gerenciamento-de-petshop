<?php
    include_once "../../models/servicos/consultaEditarExcluir-servico.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro de Serviço</title>
    <link href="../../assets/css/style3.css" rel="stylesheet" />
</head>
<body>
    <h1>Editar Cadastro de Serviço</h1>
    <form action="../../models/servicos/editar-servico.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Serviço:</h2>
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" />
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" />
            <br /><br />
            <label id="label-formulario">Descrição: </label>
            <textarea cols="30" rows="10" name="descricao" id="descricao" ><?php echo $linha['descricao'] ?></textarea>
            <br /><br />
            <label id="label-formulario">Valor: </label>
            <input type="number" name="valor" id="valor" value="<?php echo $linha['valor'] ?>" />
            <hr />
        </div>
        <div id="campo">
            <a href="cadastro-servico.php"><input type="button" value="Voltar" /></a>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Salvar" />
        </div>
     </form>
</body>
</html>
