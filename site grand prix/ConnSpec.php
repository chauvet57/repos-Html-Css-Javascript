<?php
require_once "conn.php";
    
function specialite() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM specialite");
    $stmt->execute();
    $specialite = $stmt->fetchAll();

    return $specialite;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>