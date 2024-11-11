<?php
    $servername = "localhost:3309";
    $username = "root";
    $password = "";
    $dbname = "crudS";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){

        echo "Erro de conexã0" . $conn->connect_error;

    }
?>