<?php


require_once "conn.php";
    
function eliminatoire() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM eliminatoire INNER JOIN epreuve ON eliminatoire.ID_EPREUVE=epreuve.ID_EPREUVE 
                                                       INNER JOIN specialite ON eliminatoire.ID_SPECIALITE=specialite.ID_SPECIALITE ORDER BY ID_ELIMINATOIRE ASC");
                                                       
    $stmt->execute(); 
    $eliminatoire = $stmt->fetchAll();

    return $eliminatoire;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
