<?php
    include_once "../conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $cliente_id = filter_var($_POST['cliente_id'], FILTER_SANITIZE_NUMBER_INT);

		if(empty($id)) {
			echo "O id não foi encontrado.";
		}
        
	    $delete = $conectar->prepare("DELETE FROM cadastro_animal WHERE id = :id");
	    $delete->bindParam(':id', $id);
	    $delete->execute();
	
    	header("location: ../../controllers/animais/cadastro-animal.php?id=$cliente_id");
	
    } catch(PDOException $e) {
    
	    echo'Erro:' . $e->getMessage();

    }	    
?>