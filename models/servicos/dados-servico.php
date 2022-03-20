<?php
	include_once "../conexao.php";

	try {
		
		$nome = filter_var($_POST['nome']);
		$descricao = filter_var($_POST['descricao']);
		$valor = filter_var($_POST['valor']);
				
		$insert = $conectar->prepare("INSERT INTO cadastro_servico (nome, descricao, valor) VALUES (:nome, :descricao, :valor)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':descricao', $descricao);
		$insert->bindParam(':valor', $valor);
		$insert->execute();
		
		header("location: ../../controllers/servicos/cadastro-servico.php");
		
		
	} catch(PDOException $e) {
		
		echo'Erro:' . $e->getMessage();

	}
?>	