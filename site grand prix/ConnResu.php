
<?php
require_once "conn.php";
    
function resultat_athl() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM resultat_athl INNER JOIN athlete ON resultat_athl.ID_ATHLETE=athlete.ID_ATHLETE ORDER BY ID_ELIMINATOIRE ASC");
    $stmt->execute();
    $resultat_athl = $stmt->fetchAll();

    return $resultat_athl;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>