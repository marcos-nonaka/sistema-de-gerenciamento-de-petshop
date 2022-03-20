<?php
    include_once "../conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_var($_POST['nome']);
		$parentesco = filter_var($_POST['parentesco']);

		if(empty($id)) {
			echo "O id não foi encontrado.";
		}
        
	    $update = $conectar->prepare("UPDATE cadastro_responsavel SET nome = :nome, parentesco = :parentesco WHERE id = :id");
	    $update->bindParam(':id', $id);
        $update->bindParam(':nome', $nome);
	    $update->bindParam(':parentesco', $parentesco);
	    $update->execute();
	
    	header("location: ../../controllers/responsaveis/cadastro-responsavel.php");
	
    } catch(PDOException $e) {
    
	    echo'Erro:' . $e->getMessage();

    }	    
?>