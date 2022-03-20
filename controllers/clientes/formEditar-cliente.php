<?php
    include_once "../../models/clientes/consultaEditarExcluir-cliente.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro de Cliente</title>
    <link href="../../assets/css/style1.css" rel="stylesheet" />
</head>
<body>
    <h1>Editar Cadastro de Cliente</h1>
    <form action="../../models/clientes/editar-cliente.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Cliente:</h2>
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" />
            <label id="label-formulario">CPF: </label>
            <input type="number" name="cpf" id="cpf" value="<?php echo $linha['cpf'] ?>" />
            <br /><br />
            <label id="label-formulario">E-mail: </label>
            <input type="email" name="email" id="email" value="<?php echo $linha['email'] ?>" />
            <label id="label-formulario">Celular: </label>
            <input type="number" name="celular" id="celular" value="<?php echo $linha['celular'] ?>" />
            <label id="label-formulario">WhatsApp: </label>
            <input type="tel" name="whatsapp" id="whatsapp" value="<?php echo $linha['whatsapp'] ?>" />
            <hr />
        </div>
        <div id="campo">
            <h2>Endereço:</h2>
            <label id="label-formulario">Rua: </label>
            <input type="text" name="rua" id="rua" value="<?php echo $linha['rua'] ?>" />
            <label id="label-formulario">Nº: </label>
            <input type="number" name="numero" id="numero" value="<?php echo $linha['numero'] ?>" />
            <label id="label-formulario">Complemento: </label>
            <input type="text" name="complemento" id="complemento" value="<?php echo $linha['complemento'] ?>" />
            <br /><br />
            <label id="label-formulario">Bairro: </label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $linha['bairro'] ?>" />
            <label id="label-formulario">Cidade: </label>
            <input type="text" name="cidade" id="cidade" value="<?php echo $linha['cidade'] ?>" />
            <label id="label-formulario">UF: </label>
            <input type="text" name="uf" id="uf" value="<?php echo $linha['uf'] ?>" />
            <label id="label-formulario">Cep: </label>
            <input type="number" name="cep" id="cep" value="<?php echo $linha['cep'] ?>" />
            <hr />
        </div>
        <div id="campo">
            <a href="../../views/consulta-cliente.php?id=<?php echo $linha['id'] ?>"><input type="button" value="Voltar" /></a>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Atualizar" />
        </div>
     </form>
</body>
</html>