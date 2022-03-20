<?php
    include_once "../conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_var($_POST['nome']);
		$descricao = filter_var($_POST['descricao']);
		$valor = filter_var($_POST['valor']);

		if(empty($id)) {
			echo "O id não foi encontrado.";
		}
		
	    $update = $conectar->prepare("UPDATE cadastro_servico SET nome = :nome, descricao = :descricao, valor = :valor WHERE id = :id");
	    $update->bindParam(':id', $id);
        $update->bindParam(':nome', $nome);
	    $update->bindParam(':descricao', $descricao);
	    $update->bindParam(':valor', $valor);
	    $update->execute();
	
    	header("location: ../../controllers/servicos/cadastro-servico.php");
	
    } catch(PDOException $e) {
    
	    echo'Erro:' . $e->getMessage();

    }	    
?>