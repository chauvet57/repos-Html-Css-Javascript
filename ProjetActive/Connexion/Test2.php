<?php
//include "Sql.php";
session_start();  // démarrage d'une session



// on vérifie que les données du formulaire sont présentes
if (isset($_POST['login']) && isset($_POST['pwd'])) {
    require "Sql.php";
    
    $sql = new sql();
    $sql->connect();

    // cette requête permet de récupérer l'utilisateur depuis la BD
   
    $req = $sql->requete("SELECT * FROM ACCES WHERE STR_LOGIN=? AND STR_MDP=?");
    $login = $_POST['login'];
    $mdp = $_POST['pwd'];
    $resultat->fetch(array($login, $mdp));
    //$resultat = $req->fetch();
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['login'] = $login;
        $_SESSION['pwd'] = $mdp;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Résultat de l'authentification</title>
</head>
<body>
    <h1>Résultat de l'authentification</h1>
    <?php
    if (isset($authOK)) {
        echo "<p>Vous avez été reconnu(e) en tant que " . escape($login) . "</p>";
        echo '<a href="index.php">Poursuivre vers la page d\'accueil</a>';
    }
    else { ?>
        <p>Vous n'avez pas été reconnu(e)</p>
        <p><a href="login.php">Nouvel essai</p>
    <?php } ?>
</body>
</html>
