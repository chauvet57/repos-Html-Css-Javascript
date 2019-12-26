<?php
require_once "conn.php";
    
function transport() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM transport INNER JOIN stade ON transport.ID_STADE=stade.ID_STADE");
    $stmt->execute();
    $transport = $stmt->fetchAll();

    return $transport;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>