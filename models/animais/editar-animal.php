<?php
    include_once "../conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $cliente_id = filter_var($_POST['cliente_id']);
        $nome = filter_var($_POST['nome']);
        $raca = filter_var($_POST['raca']);
        $peso = filter_var($_POST['peso']);
        $porte = filter_var($_POST['porte']);
	
		if(empty($id)) {
			echo "O id não foi encontrado.";
		}

        $update = $conectar->prepare("UPDATE cadastro_animal SET nome = :nome, raca = :raca, peso = :peso, porte = :porte WHERE id = :id");
	    $update->bindParam(':id', $id);
        $update->bindParam(':nome', $nome);
	    $update->bindParam(':raca', $raca);
	    $update->bindParam(':peso', $peso);
	    $update->bindParam(':porte', $porte);
	    $update->execute();
	
    	header("location: ../../controllers/animais/cadastro-animal.php?id=$cliente_id");
	
    } catch(PDOException $e) {
    
	    echo'Erro:' . $e->getMessage();

    }	    
?>