<?php
require_once "conn.php";
    
function federation() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM federation ");
    $stmt->execute();
    $federation = $stmt->fetchAll();

    return $federation;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>