<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnSpec.php";
$specialite = specialite();
require_once "ConnSess.php";
$session = session();

$ID_EPREUVE = "";
$ID_SPECIALITE = "";
$ID_SESSION = "";
$DATE_FIN_EPREUVE = "";
$DATE_FIN_EPREUVE = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_EPREUVE"];
$posts[1] = $_POST["ID_SPECIALITE"];
$posts[2] = $_POST["ID_SESSION"];
$posts[3] = $_POST["DATE_DEBUT_EPREUVE"];
$posts[4] = $_POST["DATE_FIN_EPREUVE"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE epreuve SET ID_SPECIALITE = :ID_SPECIALITE,ID_SESSION = :ID_SESSION,DATE_DEBUT_EPREUVE = :DATE_DEBUT_EPREUVE,DATE_FIN_EPREUVE = :DATE_FIN_EPREUVE WHERE ID_EPREUVE = :ID_EPREUVE');
        $updateStmt->execute(
                  array(
                    ':ID_EPREUVE'=> $data[0],
                    ':ID_SPECIALITE'=> $data[1],
                    ':ID_SESSION'=> $data[2],
                    ':DATE_DEBUT_EPREUVE'=> $data[3],
                    ':DATE_FIN_EPREUVE'=> $data[4]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="epreuve.php" class="alert-link">Retour</a></h2>
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
                                     (SELECT ID_EPREUVE FROM epreuve WHERE ID_EPREUVE = :ID_EPREUVE));
                                     DELETE FROM eliminatoire WHERE ID_EPREUVE IN
                                     (SELECT ID_EPREUVE FROM epreuve WHERE ID_EPREUVE = :ID_EPREUVE);
                                      DELETE FROM epreuve WHERE ID_EPREUVE = :ID_EPREUVE');
        $deleteStmt->execute(
                  array(
                    ':ID_EPREUVE'=> $data[0],
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="epreuve.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Numéro Epreuve</label></h1>
            <input class="control-label" type="text" name="ID_EPREUVE" placeholder="" value="<?php echo $_GET['ID_EPREUVE'];?>"><br><br>
            <h1><label>Nom Spécialité</label></h1>
               <select name="ID_SPECIALITE">
                <option value="<?php echo $_GET['ID_SPECIALITE'];?>"><?php echo $specialite[$_GET['ID_SPECIALITE']-1]["NOM_SPECIALITE"] ?></option>
                <?php
                    for($i=0; $i<sizeof($specialite); $i++){
                      echo '<option value="'.$specialite[$i]["ID_SPECIALITE"].'">'.$specialite[$i]["NOM_SPECIALITE"].'</option>';
                    }?>
                    </select><br><br>
                    <h1><label>Nom Session</label></h1>
                <select name="ID_SESSION">
                <option value="<?php echo $_GET['ID_SESSION'];?>"><?php echo $session[$_GET['ID_SESSION']-1]["NOM_SESSION"] ?></option>
                <?php
                    for($i=0; $i<sizeof($session); $i++){
                      echo '<option value="'.$session[$i]["ID_SESSION"].'">'.$session[$i]["NOM_SESSION"].'</option>';
                    }?>
                    </select><br><br>
            <h1><label>Date Debut</label></h1>
            <input class="control-label" type="date" name="DATE_DEBUT_EPREUVE" placeholder="" value="<?php echo $_GET['DATE_DEBUT_EPREUVE'];?>"><br><br>
            <h1><label>Date Fin</label></h1>
            <input class="control-label" type="date" name="DATE_FIN_EPREUVE" placeholder="" value="<?php echo $_GET['DATE_FIN_EPREUVE'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Tous les résultats et les éliminatoires appartenant a cette epreuve seront supprimés !!!\n \n \nVeuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="epreuve.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>


</html>