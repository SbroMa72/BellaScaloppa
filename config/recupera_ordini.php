<?php
require_once ('connection.php');

try {
    $query = "SELECT * FROM Ordine";
    $result = mysqli_query($con, $query);

    $ordini = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $ordini[] = $row;
    }

    echo json_encode($ordini);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>