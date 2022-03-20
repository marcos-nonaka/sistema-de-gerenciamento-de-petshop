<?php
    include_once "../../models/conexao.php";

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    if(empty($id)) {
        echo "O id não foi encontrado.";
    }
    $consulta = $conectar->query("SELECT * FROM cadastro_cliente WHERE id = '$id'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>