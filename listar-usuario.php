<h1 class="mb-3">Listar Usuários</h1>
<?php

    // Define uma consulta SQL para selecionar todos os usuários da tabela
    $sql = "SELECT * FROM usuarios";

    // Executa a consulta e armazena o resultado em "$res"
    $res = $conn->query($sql);

    // Obtém o número de linhas do resultado
    $qtd = $res->num_rows;

    // Verifica se há usuários cadastrados
    if($qtd > 0) {
        // Cria uma tabela HTML
        print "<table class='table table-hover table-striped table-bordered'>";
        // Cria uma linha de cabeçalho da tabela com títulos das colunas
        print "<tr>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        // Percorre o resultado e cria uma linha na tabela para cada usuário
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            // Adiciona dois botões para editar ou excluir o usuário em uma célula da tabela
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir esse o usuário $row->nome?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        // Se não houver usuários cadastrados, exibe uma mensagem de aviso
        print "<p class='mt-3 p-4 alert alert-danger'>Nenhum usuário cadastrado.</p>";
    }

?>