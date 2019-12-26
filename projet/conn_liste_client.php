


<?php
require_once "conn.php";


function liste_client() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM liste_client ");
    $stmt->execute();
    $liste_client = $stmt->fetchAll();

    return $liste_client;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



?>

