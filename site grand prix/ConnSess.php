<?php
require_once "conn.php";
    
function session() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM session");
    $stmt->execute();
    $session = $stmt->fetchAll();

    return $session;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>