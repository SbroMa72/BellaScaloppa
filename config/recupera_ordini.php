<?php
require_once ('connection.php');

$query = "SELECT * FROM Ordine";
$result = mysqli_query($con, $query);

$ordini = [];
while ($row = mysqli_fetch_assoc($result)) {
    $ordini[] = $row;
}

echo json_encode($ordini);
?>