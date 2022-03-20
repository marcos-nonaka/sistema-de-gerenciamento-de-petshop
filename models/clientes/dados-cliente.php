<?php
	include_once "../conexao.php";

	try {
		
		$nome = filter_var($_POST['nome']);
		$cpf = filter_var($_POST['cpf']);
		$email = filter_var($_POST['email']);
		$celular = filter_var($_POST['celular']);
		$whatsapp = filter_var($_POST['whatsapp']);
		$rua = filter_var($_POST['rua']);
		$numero = filter_var($_POST['numero']);
		$complemento = filter_var($_POST['complemento']);
		$bairro = filter_var($_POST['bairro']);
		$cidade = filter_var($_POST['cidade']);
		$uf = filter_var($_POST['uf']);
		$cep = filter_var($_POST['cep']);
		
		
		$insert = $conectar->prepare("INSERT INTO cadastro_cliente (nome, cpf, email, celular, whatsapp, rua, numero, complemento, bairro, cidade, uf, cep) VALUES (:nome, :cpf, :email, :celular, :whatsapp, :rua, :numero, :complemento, :bairro, :cidade, :uf, :cep)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':cpf', $cpf);
		$insert->bindParam(':email', $email);
		$insert->bindParam(':celular', $celular);
		$insert->bindParam(':whatsapp', $whatsapp);
		$insert->bindParam(':rua', $rua);
		$insert->bindParam(':numero', $numero);
		$insert->bindParam(':complemento', $complemento);
		$insert->bindParam(':bairro', $bairro);
		$insert->bindParam(':cidade', $cidade);
		$insert->bindParam(':uf', $uf);
		$insert->bindParam(':cep', $cep);
		$insert->execute();
		
		header("location: ../../controllers/clientes/cadastro-cliente.php");
				
	} catch(PDOException $e) {
		
		echo'Erro:' . $e->getMessage();

	}
?>