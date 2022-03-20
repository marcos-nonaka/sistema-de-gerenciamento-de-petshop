<?php
    include_once "../../models/animais/consultaEditarExcluir-animal.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro de Animal</title>
    <link href="../../assets/css/style2.css" rel="stylesheet" />
</head>
<body>
    <h1>Editar Cadastro de Animal</h1>
    <form action="../../models/animais/editar-animal.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Animal:</h2>
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" />
            <input type="hidden" name="cliente_id" value="<?php echo $linha['cliente_id'] ?>" />
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" />
            <br /><br />
            <label id="label-formulario">Raça: </label>
            <input type="text" name="raca" id="raca" value="<?php echo $linha['raca'] ?>" />
            <label id="label-formulario">Peso: </label>
            <input type="number" name="peso" id="peso" value="<?php echo $linha['peso'] ?>" />
            <label id="label-formulario">kg. - </label>
            <label id="label-formulario">Porte: </label>
            <input type="text" name="porte" id="porte" value="<?php echo $linha['porte'] ?>" />
            <hr />
        </div>
        <div id="campo">
            <a href="cadastro-animal.php?id=<?php echo $linha['cliente_id'] ?>"><input type="button" value="Voltar" /></a>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Atualizar" />
        </div>
     </form>
</body>
</html>