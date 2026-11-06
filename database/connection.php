<?php
    $database = "TechLibrary_DB";
    $password = "";
    $port = 3307;
    $hostname = "localhost";
    $username = "root";

    $connection = mysqli_connect($hostname, $username, $password, $database, $port);

    if (!$connection) {
        die("Problemas com a conexão do banco!");
    }
    ?>