<?php
    include_once "../conexao.php";

    try {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

		if(empty($id)) {
			echo "O id não foi encontrado.";
		}
        
	    $delete = $conectar->prepare("DELETE FROM cadastro_servico WHERE id = :id");
	    $delete->bindParam(':id', $id);
	    $delete->execute();
	
    	header("location: ../../controllers/servicos/cadastro-servico.php");
	
    } catch(PDOException $e) {
    
	    echo'Erro:' . $e->getMessage();

    }	    
?>