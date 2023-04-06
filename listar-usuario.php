<h1>Listar Usuários</h1>
<?php

    // Consulta o banco de dados
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='mt-3 p-4 aler alert-danger'>Nenhum usuário cadastrado.</p>";
    }

?>