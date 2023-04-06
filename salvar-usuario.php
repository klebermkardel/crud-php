<?php

    // Início do bloco de switch, que irá verificar a ação solicitada pelo usuário.
    switch($_REQUEST["acao"]) {
        
        // Caso a ação seja "cadastrar", o código abaixo é executado.
        case "cadastrar":
            // Recebe os dados enviados pelo formulário e os armazena em variáveis locais.
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            // Monta a query SQL de inserção de dados na tabela "usuarios".
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            // Executa a query SQL no banco de dados.
            $res = $conn->query($sql);

            // Verifica se a operação foi bem sucedida e exibe uma mensagem de sucesso ou falha.
            if($res == true) {
                print "<script>alert('Usuário cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar o usuário!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;

        // Caso a ação seja "editar", o código abaixo é executado.
        case "editar":
            // Recebe os dados enviados pelo formulário e os armazena em variáveis locais.
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            // Monta a query SQL de atualização de dados na tabela "usuarios".
            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}',
                        data_nasc='{$data_nasc}'
                        WHERE
                            id=".$_REQUEST["id"];

            // Executa a query SQL no banco de dados.
            $res = $conn->query($sql);

            // Verifica se a operação foi bem sucedida e exibe uma mensagem de sucesso ou falha.
            if($res == true) {
                print "<script>alert('Usuário editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível editar o usuário!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;

        // Caso a ação seja "excluir", o código abaixo é executado.
        case "excluir":
            // Monta a query SQL de exclusão de um registro da tabela "usuarios".
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            // Executa a query SQL no banco de dados.
            $res = $conn->query($sql);

            // Verifica se a operação foi bem sucedida e exibe uma mensagem de sucesso ou falha.
            if($res == true) {
                print "<script>alert('Usuário excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir o usuário!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
    }

?>