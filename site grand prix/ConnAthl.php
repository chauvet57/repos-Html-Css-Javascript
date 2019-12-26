<?php
require_once "conn.php";


function athlete() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM athlete INNER JOIN federation ON athlete.ID_FEDERATION=federation.ID_FEDERATION ORDER BY ID_ATHLETE ASC");
    $stmt->execute();
    $athlete = $stmt->fetchAll();

    return $athlete;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>