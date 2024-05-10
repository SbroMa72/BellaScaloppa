<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codPiatto = $_POST['codPiatto'];
    $nomeCliente = $_POST['nomeCliente'];
    $nomePiatto = $_POST['nomePiatto'];
    $prezzo = $_POST['prezzo'];

    $query = "INSERT INTO Ordine (nomeCliente, nomePiatto, totale) VALUES ('$nomeCliente', '$nomePiatto', $prezzo)";
    if (mysqli_query($con, $query)) {
        echo "Ordine inserito con successo!";
    } else {
        echo "Errore durante l'inserimento dell'ordine: " . mysqli_error($con);
    }
}
?>
