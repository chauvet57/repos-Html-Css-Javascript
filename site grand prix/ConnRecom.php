<?php
require_once "conn.php";
    
function recompense() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM recompense");
    $stmt->execute();
    $recompense = $stmt->fetchAll();

    return $recompense;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>