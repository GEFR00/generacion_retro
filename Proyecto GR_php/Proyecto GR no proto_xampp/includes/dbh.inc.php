<?php
    $serverName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "bdradiogr";

    $conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

    if(!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
