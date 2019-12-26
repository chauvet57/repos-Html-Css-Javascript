<?php
require_once "conn.php";
    
function stade() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM stade INNER JOIN federation ON stade.ID_FEDERATION=federation.ID_FEDERATION ORDER BY ID_STADE ASC");
    $stmt->execute();
    $stade = $stmt->fetchAll();

    return $stade;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
