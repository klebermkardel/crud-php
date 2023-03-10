<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "clientes";

    $conn = new mysqli($host, $user, $password, $dbName);

    if($conn->connect_error) {
        die("Connection Failed".$conn->connect_error);
    }
    
?>