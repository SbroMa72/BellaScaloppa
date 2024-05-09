<?php
    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "ristorante";

    $conn = new mysqli($server, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>