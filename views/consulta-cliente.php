<?php
	include_once "../models/conexao.php";

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    try {
	
		// execução da instrução sql 
    	$consulta = $conectar->query("SELECT * FROM cadastro_cliente WHERE id = $id"); // ESTA LINHA FAZ A BUSCA NA TABELA LOGIN

		echo "<link rel='stylesheet' href='../assets/css/style.css' />";
			
		echo "<h2>Cliente</h2>";

		echo "<table border='1'><tr><th>Código</th><th>Nome</th><th>CPF</th><th>E-mail</th><th>Celular</th><th>WhatsApp</th><th>Rua</th><th>Número</th><th>Complemento</th><th>Bairro</th><th>Cidade</th><th>UF</th><th>CEP</th><th>Ações</th></tr>";
	
    	$linha = $consulta->fetch(PDO::FETCH_ASSOC);
		
    	echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[cpf]</td><td>$linha[email]</td><td>$linha[celular]</td><td>$linha[whatsapp]</td><td>$linha[rua]</td><td>$linha[numero]</td><td>$linha[complemento]</td><td>$linha[bairro]</td><td>$linha[cidade]</td><td>$linha[uf]</td><td>$linha[cep]</td><td><a href='../controllers/clientes/formEditar-cliente.php?id=$linha[id]'><input type='button' value='Editar' /></a><a href='../controllers/clientes/excluir-cliente.php?id=$linha[id]'><input type='button' value='Excluir' /></a></td></tr>";
	        
		echo "</table><p>"; // imprimir o final da tabela para fechar a tabela
		
		echo $consulta->rowCount() . " Registro(s) Exibido(s).</p>";

    } catch(PDOException $e) {
	
		echo $e->getMessage();
	
    }

    try {
	
		// execução da instrução sql 
		$consulta = $conectar->query("SELECT * FROM cadastro_animal WHERE cliente_id = $id"); // ESTA LINHA FAZ A BUSCA NA TABELA LOGIN
	
		echo "<h2>Pets</h2>";  // Exibe o link com a informação "Novo Cadastro"
	
		echo "<table border='1'><tr><th>Código</th><th>Nome</th><th>Raça</th><th>Peso</th><th>Porte</th><th>Cód. Cliente</th><th>Ações</th></tr>";
	
		while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
		
        	echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[raca]</td><td>$linha[peso]</td><td>$linha[porte]</td><td>$linha[cliente_id]</td><td><a href='../views/animais/formEditar-animal.php?id=$linha[id]'><input type='button' value='Editar' /></a><a href='../views/animais/excluir-animal.php?id=$linha[id]'><input type='button' value='Excluir' /></a></td></tr>";	
    
    	}	
        
		echo "</table><p>"; // imprimir o final da tabela para fechar a tabela
		
		echo $consulta->rowCount() . " Registro(s) Exibido(s).</p>";

		echo "<a href='../controllers/clientes/cadastro-cliente.php'><input type='button' value='Voltar' /></a>";  // Exibe o link com a informação "Novo Cadastro"

	} catch(PDOException $e) {
	
		echo $e->getMessage();
	
    }

    //try {
	
	// execução da instrução sql 
	//$consulta = $conectar->query("SELECT * FROM cadastro_servico"); // ESTA LINHA FAZ A BUSCA NA TABELA LOGIN
	
	//echo "Serviços Cadastrados";  // Exibe o link com a informação "Novo Cadastro"
	
	//echo "<table border='1'><tr><td>Código</td><td>Nome</td><td>Descrição</td><td>Valor</td><td>Ações</td></tr>";
	
	//while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
		
	//	echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[descricao]</td><td>$linha[valor]</td><td><a href='formEditar-servico.php?id=$linha[id]'>Editar</a> - <a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr>";
	
    //}	
        
	//echo "</table>"; // imprimir o final da tabela para fechar a tabela
		
	//echo $consulta->rowCount() . " Registros Exibidos <br><br>";


    //} catch(PDOException $e) {
	
	//	echo $e->getMessage();
	
    //}

    //try {
	
	// execução da instrução sql 
	//$consulta = $conectar->query("SELECT * FROM cadastro_responsavel"); // ESTA LINHA FAZ A BUSCA NA TABELA LOGIN
	
	/*echo "Responsáveis Cadastrados";  // Exibe o link com a informação "Novo Cadastro"
	
	echo "<table border='1'><tr><td>Código</td><td>Nome</td><td>Parentesco</td><td>Ações</td></tr>";
	
	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
		
		echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[parentesco]</td><td><a href='formEditar-responsavel.php?id=$linha[id]'>Editar</a> - <a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr>";
	
    }	
        
	echo "</table>"; // imprimir o final da tabela para fechar a tabela
		
	echo $consulta->rowCount() . " Registros Exibidos ";


    } catch(PDOException $e) {
	
		echo $e->getMessage();
	
    }*/
?>