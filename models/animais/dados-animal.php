<?php
	include_once "../conexao.php";

	try {
		
		$cliente_id = filter_var($_POST['cliente_id']);
		$nome = filter_var($_POST['nome']);
		$raca = filter_var($_POST['raca']);
		$peso = filter_var($_POST['peso']);
		$porte = filter_var($_POST['porte']);
		$clienteId = filter_var($_POST['cliente_id']);
		
		$insert = $conectar->prepare("INSERT INTO cadastro_animal (nome, raca, peso, porte, cliente_id) VALUES (:nome, :raca, :peso, :porte, :cliente_id)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':raca', $raca);
		$insert->bindParam(':peso', $peso);
		$insert->bindParam(':porte', $porte);
		$insert->bindParam(':cliente_id', $clienteId);
		$insert->execute();
		
		header("location: ../../controllers/animais/cadastro-animal.php?id=$cliente_id");
				
	} catch(PDOException $e) {
		
		echo'Erro:' . $e->getMessage();

	}
?>