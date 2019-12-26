<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnSess.php";
$session = session();

$ID_SESSION = "";
$NOM_SESSION = "";
$DATE_DEBUT_SESSION = "";
$DATE_FIN_SESSION = "";
$ANNEE_SESSION = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_SESSION"];
$posts[1] = $_POST["NOM_SESSION"];
$posts[2] = $_POST["DATE_DEBUT_SESSION"];
$posts[3] = $_POST["DATE_FIN_SESSION"];
$posts[4] = $_POST["ANNEE_SESSION"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE session SET NOM_SESSION = :NOM_SESSION,DATE_DEBUT_SESSION = :DATE_DEBUT_SESSION,DATE_FIN_SESSION = :DATE_FIN_SESSION,ANNEE_SESSION = :ANNEE_SESSION WHERE ID_SESSION = :ID_SESSION');
        $updateStmt->execute(
                  array(
                    ':ID_SESSION'=> $data[0],
                    ':NOM_SESSION'=> $data[1],
                    ':DATE_DEBUT_SESSION'=> $data[2],
                    ':DATE_FIN_SESSION'=> $data[3],
                    ':ANNEE_SESSION'=> $data[4]
                  
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="session.php" class="alert-link">Retour</a></h2>
                  </div>
                </div>
                  </div><?php
                  }
         }
}

//fonction supprimer

if(isset($_POST["delete"]))
{
  $data = getPosts();
    if(empty($data[0]))
    {}   
    else {

        $deleteStmt = $conn->prepare('DELETE FROM resultat_athl WHERE ID_ELIMINATOIRE IN
                                      (SELECT ID_ELIMINATOIRE FROM eliminatoire WHERE ID_EPREUVE IN
                                      (SELECT ID_EPREUVE FROM epreuve WHERE ID_SESSION IN
                                      (SELECT ID_SESSION FROM session WHERE ID_SESSION = :ID_SESSION)));
                                      DELETE FROM eliminatoire WHERE ID_EPREUVE IN
                                      (SELECT ID_EPREUVE FROM epreuve WHERE ID_SESSION IN
                                      (SELECT ID_SESSION FROM session WHERE ID_SESSION = :ID_SESSION));
                                      DELETE FROM epreuve WHERE ID_SESSION IN
                                      (SELECT ID_SESSION FROM session WHERE ID_SESSION = :ID_SESSION); 
                                      DELETE FROM session WHERE ID_SESSION = :ID_SESSION');
        $deleteStmt->execute(
                  array(
                    ':ID_SESSION'=> $data[0],
                   
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="session.php" class="alert-link">Retour</a></h2>
                  </div>
                  </div>
                  </div><?php
                  }
         }
}

?>
<html>
    
    <head>
            
    </head>
        
    <header>
    <?php include "index.php";
    ?>
    
    </header>
            
    <body>

    
    <main class="container mt-5">
    <table class="table table-hover">
    <thead class="bg-light">

    <td><form action="" method="POST">
<div class="text-center">
            <h1><label>Numéro Session</label></h1>
            <input class="control-label" type="text" name="ID_SESSION" placeholder="" value="<?php echo $_GET['ID_SESSION'];?>"><br><br>
            <h1><label>Nom Session</label></h1>
            <input class="control-label" type="text" name="NOM_SESSION" placeholder="" value="<?php echo $_GET['NOM_SESSION'];?>"><br><br>
            <h1><label>Date Debut</label></h1>
            <input class="control-label" type="date" name="DATE_DEBUT_SESSION" placeholder="" value="<?php echo $_GET['DATE_DEBUT_SESSION'];?>"><br><br>
            <h1><label>Date Fin</label></h1>
            <input class="control-label" type="date" name="DATE_FIN_SESSION" placeholder="" value="<?php echo $_GET['DATE_FIN_SESSION'];?>"><br><br>
            <h1><label>Année</label></h1>
            <input class="control-label" type="year" name="ANNEE_SESSION" placeholder="" value="<?php echo $_GET['ANNEE_SESSION'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Tous les résultats,éliminatoires et épreuves appartenant a cette session seront supprimés !!!\n \n \nVeuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="session.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>


</html>