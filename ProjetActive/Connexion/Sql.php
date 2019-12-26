

<?php
    class sql
    {
    //private $connexion_sql;
       
        function connect()
        {
            $this->connexion_bdd = new PDO('odbc:Driver={SQL Server Native Client 11.0};Server=PC-CDA07;Database=ProjetActive', 'sa', 'AFPA2019!');

            // Fixe les options d'erreur (ici nous utiliserons les exceptions)
            $this->connexion_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        public function requete($requete)
        {
            $prepare = $this->connexion_bdd->prepare($requete);
            $prepare->execute();
            
            return $prepare;
        }
    }

    /**
 * Nettoie une valeur insérée dans une page HTML
 * Doit être utilisée à chaque insertion de données dynamique dans une page HTML
 * Permet d'éviter les problèmes d'exécution de code indésirable (XSS)
 * @param string $valeur Valeur à nettoyer
 * @return string Valeur nettoyée
 */
function escape($valeur)
{
    // Convertit les caractères spéciaux en entités HTML
    return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
}

   // $sql = new sql();

   // $req = $sql->requete('SELECT * FROM REGION');
    //while ($r = $req->fetch())
   // {
   //     print_r($r);
   // }
?>
