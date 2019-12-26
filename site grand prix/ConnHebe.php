<?php
require_once "conn.php";
    
function hebergement() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM hebergement INNER JOIN stade ON hebergement.ID_STADE=stade.ID_STADE");
    $stmt->execute();
    $hebergement = $stmt->fetchAll();

    return $hebergement;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>