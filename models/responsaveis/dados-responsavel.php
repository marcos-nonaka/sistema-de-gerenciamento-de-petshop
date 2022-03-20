<?php
	include_once "../conexao.php";

	try {
		
		$nome = filter_var($_POST['nome']);
		$parentesco = filter_var($_POST['parentesco']);

		$insert = $conectar->prepare("INSERT INTO cadastro_responsavel (nome, parentesco) VALUES (:nome, :parentesco)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':parentesco', $parentesco);
		$insert->execute();
		
		header("location: ../../controllers/responsaveis/cadastro-responsavel.php");
		
	} catch(PDOException $e) {
		
		echo'Erro:' . $e->getMessage();

	}
?>