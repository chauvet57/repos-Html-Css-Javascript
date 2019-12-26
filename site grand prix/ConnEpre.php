<?php
require_once "conn.php";
    
function epreuve() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM epreuve INNER JOIN specialite ON epreuve.ID_SPECIALITE=specialite.ID_SPECIALITE
                                                  INNER JOIN session ON epreuve.ID_SESSION=session.ID_SESSION");
    $stmt->execute();
    $epreuve = $stmt->fetchAll();

    return $epreuve;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
