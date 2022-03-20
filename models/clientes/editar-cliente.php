<?php
    include_once "../conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
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
	
		if(empty($id)) {
			echo "O id não foi encontrado.";
		}

	    $update = $conectar->prepare("UPDATE cadastro_cliente SET nome = :nome, cpf = :cpf, email = :email, celular = :celular, whatsapp = :whatsapp, rua = :rua, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, uf = :uf, cep = :cep WHERE id = :id");
	    $update->bindParam(':id', $id);
        $update->bindParam(':nome', $nome);
	    $update->bindParam(':cpf', $cpf);
	    $update->bindParam(':email', $email);
	    $update->bindParam(':celular', $celular);
	    $update->bindParam(':whatsapp', $whatsapp);
	    $update->bindParam(':rua', $rua);
	    $update->bindParam(':numero', $numero);
	    $update->bindParam(':complemento', $complemento);
	    $update->bindParam(':bairro', $bairro);
	    $update->bindParam(':cidade', $cidade);
	    $update->bindParam(':uf', $uf);
	    $update->bindParam(':cep', $cep);
	    $update->execute();
	
	header("location: ../../views/consulta-cliente.php?id=$id");
	
    } catch(PDOException $e) {
    
	    echo'Erro:' . $e->getMessage();

    }	    
?>