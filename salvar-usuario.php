<?php

    switch($_REQUEST["acao"]) {
        case "cadastrar":
            // Recepção dos dados
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

        break;
        case "editar":
            //code
        break;
        case "excluir":
            //code
        break;
    }

?>