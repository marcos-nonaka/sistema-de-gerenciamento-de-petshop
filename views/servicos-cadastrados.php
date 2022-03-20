<?php
    include_once "../../models/conexao.php";

    try {
	
        include_once "../../models/servicos/consulta-servicos.php";
        
        echo "<h2>Serviços Cadastrados</h2>";  // Exibe o link com a informação "Novo Cadastro"
                    
        echo "<table border='1'><tr><th>Código</th><th>Nome</th><th>Descrição</th><th>Valor</th><th>Ações</th></tr>";
                    
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        
            echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[descricao]</td><td>$linha[valor]</td><td><a href='formEditar-servico.php?id=$linha[id]'><input type='button' value='Editar' /></a><a href='excluir-servico.php?id=$linha[id]'><input type='button' value='Excluir' /></a></td></tr>";
                    
        }	
                        
        echo "</table><p>"; // imprimir o final da tabela para fechar a tabela
                        
        echo $consulta->rowCount() . " Registro(s) Exibido(s).</p>";

    } catch(PDOException $e) {
                
        echo $e->getMessage();
                
    }
?>