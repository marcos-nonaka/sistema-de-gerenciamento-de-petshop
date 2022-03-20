<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="../../assets/css/style1.css" rel="stylesheet" />
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="../../models/clientes/dados-cliente.php" method="post" id="formulario-cadastro">
        <div id="campo">
            <h2>Cadastro de novo cliente:</h2>
            <label id="label-formulario">Nome: </label>
            <input type="text" name="nome" id="nome" />
            <label id="label-formulario">CPF: </label>
            <input type="number" name="cpf" id="cpf" />
            <br /><br />
            <label id="label-formulario">E-mail: </label>
            <input type="email" name="email" id="email" />
            <label id="label-formulario">Celular: </label>
            <input type="tel" name="celular" id="celular" />
            <label id="label-formulario">WhatsApp: </label>
            <input type="tel" name="whatsapp" id="whatsapp" />
            <hr />
        </div>
        <div id="campo">
            <h2>Endereço:</h2>
            <label id="label-formulario">Rua: </label>
            <input type="text" name="rua" id="rua" />
            <label id="label-formulario">Nº: </label>
            <input type="number" name="numero" id="numero" />
            <label id="label-formulario">Complemento: </label>
            <input type="text" name="complemento" id="complemento" />
            <br /><br />
            <label id="label-formulario">Bairro: </label>
            <input type="text" name="bairro" id="bairro" />
            <label id="label-formulario">Cidade: </label>
            <input type="text" name="cidade" id="cidade" />
            <label id="label-formulario">UF: </label>
            <input type="text" name="uf" id="uf" />
            <label id="label-formulario">Cep: </label>
            <input type="number" name="cep" id="cep" />
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
                include_once "../../views/clientes-cadastrados.php";
            ?>
        </div>
     </form>
</body>
</html>