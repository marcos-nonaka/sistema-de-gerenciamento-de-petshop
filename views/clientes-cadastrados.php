<?php
    include_once "../../models/conexao.php";

    try {

        include_once "../../models/clientes/consulta-clientes.php";

        echo "<h2>Clientes Cadastrados</h2>";  // Exibe o link com a informação "Novo Cadastro"
                    
        echo "<table border='1'><tr><th>Código</th><th>Nome</th><th>CPF</th><th>E-mail</th><th>Celular</th><th>WhatsApp</th><th>Rua</th><th>Número</th><th>Complemento</th><th>Bairro</th><th>Cidade</th><th>UF</th><th>CEP</th><th>Ações</th></tr>";
                    
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        
            echo "<tr><td>$linha[id]</td><td>$linha[nome]</td><td>$linha[cpf]</td><td>$linha[email]</td><td>$linha[celular]</td><td>$linha[whatsapp]</td><td>$linha[rua]</td><td>$linha[numero]</td><td>$linha[complemento]</td><td>$linha[bairro]</td><td>$linha[cidade]</td><td>$linha[uf]</td><td>$linha[cep]</td><td><a href='../../views/consulta-cliente.php?id=$linha[id]'><input type='button' value='Consultar' /></a><a href='../../controllers/animais/cadastro-animal.php?id=$linha[id]'><input type='button' value='Cadastrar Pet' /></a></td></tr>";
                    
        }	
                        
        echo "</table><p>"; // imprimir o final da tabela para fechar a tabela
                        
        echo $consulta->rowCount() . " Registro(s) Exibido(s).</p>";

    } catch(PDOException $e) {
                
        echo $e->getMessage();
                
    }
?>