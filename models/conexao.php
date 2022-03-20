<?php
	try {
		
		// Faz conexão com o banco de dados 
		$conectar = new PDO("mysql:host=localhost;port=3306;dbname=dogao;", "root", ""); // aqui contem os atributos de conexão com banco.
		echo "";
	} catch(PDOException $e) { 
			
		// Caso ocorra algum erro na conexão com o Banco, exibe a mensagem
		echo 'Falha ao conectar com o banco de dados: ' . $e->getMessage(); // comando para imprimir a mensagem de erro na tela.
			
	}
?>