<?php
    include_once "../../models/clientes/consultaEditarExcluir-cliente.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Dados</title>
    <link href="../../assets/css/style3.css" rel="stylesheet" />
</head>
<body>
    <h1>Excluir Dados</h1>
    <form action="../../models/clientes/excluir-cliente-ok.php" method="post" id="formulario-exclusao">
        <h2>Essa operação é irreversível. Você tem certeza?</h2>
        <div id="campo">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" />
        <div id="campo">
            <a href="../../views/consulta-cliente.php?id=<?php echo $linha['id'] ?>"><input type="button" value="Voltar" /></a>
            <input type="submit" value="Excluir" />
        </div>
    </form>
</body>
</html>