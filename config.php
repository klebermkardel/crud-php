<?php
    // Define as informações de conexão com o banco de dados
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    // Cria uma nova conexão com o banco de dados usando a classe MySQLi
    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>