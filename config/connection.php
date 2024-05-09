<?php
    $server = "localhost:3306"; //sostituire la porta con la porta di xampp
    $username = "root";
    $password = "";
    $database = "ristorante";

    $con = new mysqli($server, $username, $password);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $con->select_db($database);
?>