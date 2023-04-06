<?php

    switch($_REQUEST["acao"]) {
        case "cadastrar":
            // Recepção dos dados
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            // Inserção dos dados no banco de dados
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res == true) {
                print "<script>alert('Usuário cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar o usuário!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
        case "editar":
            //code
        break;
        case "excluir":
            //code
        break;
    }

?>