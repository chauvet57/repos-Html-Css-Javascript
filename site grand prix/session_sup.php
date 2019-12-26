<?php
require_once "conn.php";
    
function session_sup() {
try {
    $conn=conn();
    $stmt = $conn->prepare("DELETE
    FROM resultat_athl 
    WHERE ID_ELIMINATOIRE IN
    
            (SELECT ID_ELIMINATOIRE
             FROM eliminatoire
             WHERE ID_EPREUVE IN
              
                     (SELECT ID_EPREUVE
                   FROM epreuve
                   WHERE ID_SESSION IN
                     
                           (SELECT ID_SESSION
                            FROM session
                            WHERE ID_SESSION = session_sup)));
                            
           DELETE 
           FROM eliminatoire
           WHERE ID_EPREUVE IN
                 
                (SELECT ID_EPREUVE
                     FROM epreuve
                     WHERE ID_SESSION IN
                     
                            (SELECT ID_SESSION
                            FROM session
                            WHERE ID_SESSION = session_sup));
                            
           DELETE 
           FROM epreuve
           WHERE ID_SESSION IN
                     
                            (SELECT ID_SESSION
                            FROM session
                            WHERE ID_SESSION = session_sup); 
                            
         DELETE
         FROM session
         WHERE ID_SESSION = session_sup");
    $stmt->execute();
    $session = $stmt->fetchAll();

    return $session_sup;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>