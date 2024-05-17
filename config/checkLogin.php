<?php
session_start();

include("connection.php");

// Controlla se l'utente esiste e se la password è corretta
if ($id && password_verify($_POST['password'], $hashed_password)) {
    // Imposta la variabile di sessione loggedin su true
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $id;

    // Reindirizza l'utente alla pagina del profilo
    header("Location: profile.php");
    exit;
} else {
    // Imposta la variabile di sessione loggedin su false
    $_SESSION['loggedin'] = false;

    // Reindirizza l'utente alla pagina di login
    header("Location: login.php");
    exit;
}
?>