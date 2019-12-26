<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnSpec.php";
$specialite = specialite();
require_once "ConnEpre.php";
$epreuve = epreuve();

$ID_ELIMINATOIRE = "";
$ID_SPECIALITE = "";
$ID_EPREUVE = "";
$DATE_ELIMINATOIRE = "";
$NBR_PARTICIPANT = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_ELIMINATOIRE"];
$posts[1] = $_POST["ID_SPECIALITE"];
$posts[2] = $_POST["ID_EPREUVE"];
$posts[3] = $_POST["DATE_ELIMINATOIRE"];
$posts[4] = $_POST["NBR_PARTICIPANT"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE eliminatoire SET ID_SPECIALITE = :ID_SPECIALITE,ID_EPREUVE = :ID_EPREUVE,DATE_ELIMINATOIRE = :DATE_ELIMINATOIRE,NBR_PARTICIPANT = :NBR_PARTICIPANT WHERE ID_ELIMINATOIRE = :ID_ELIMINATOIRE');
        $updateStmt->execute(
                  array(
                    ':ID_ELIMINATOIRE'=> $data[0],
                    ':ID_SPECIALITE'=> $data[1],
                    ':ID_EPREUVE'=> $data[2],
                    ':DATE_ELIMINATOIRE'=> $data[3],
                    ':NBR_PARTICIPANT'=> $data[4]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="eliminatoire.php" class="alert-link">Retour</a></h2>
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
                                     (SELECT ID_ELIMINATOIRE FROM eliminatoire WHERE ID_ELIMINATOIRE = :ID_ELIMINATOIRE); 
                                     DELETE FROM eliminatoire WHERE ID_ELIMINATOIRE = :ID_ELIMINATOIRE');
        $deleteStmt->execute(
                  array(
                    ':ID_ELIMINATOIRE'=> $data[0],
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="eliminatoire.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Numéro Eliminatoire</label></h1>
            <input class="control-label" type="text" name="ID_ELIMINATOIRE" placeholder="" value="<?php echo $_GET['ID_ELIMINATOIRE'];?>"><br><br>
            <h1><label>Nom Spécialité</label></h1>
           <select name="ID_SPECIALITE">
            <option value="<?php echo $_GET['ID_SPECIALITE'];?>"><?php echo $specialite[$_GET['ID_SPECIALITE']-1]["NOM_SPECIALITE"] ?></option>
            <?php
                 for($i=0; $i<sizeof($specialite); $i++){
                   echo '<option value="'.$specialite[$i]["ID_SPECIALITE"].'">'.$specialite[$i]["NOM_SPECIALITE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Numéro Epreuve</label></h1>
                <select name="ID_EPREUVE">
                <option value="<?php echo $_GET['ID_EPREUVE'];?>"><?php echo $epreuve[$_GET['ID_EPREUVE']-1]["ID_EPREUVE"] ?></option>
                <?php
                
                    for($i=0; $i<sizeof($epreuve); $i++){
                      echo '<option value="'.$epreuve[$i]["ID_EPREUVE"].'">'.$epreuve[$i]["ID_EPREUVE"].'</option>';
                    }?>
                    </select><br><br>
            <h1><label>Date Eliminatoire</label></h1>
            <input class="control-label" type="date" name="DATE_ELIMINATOIRE" placeholder="" value="<?php echo $_GET['DATE_ELIMINATOIRE'];?>"><br><br>
            <h1><label>Nombre Participant</label></h1>
            <input class="control-label" type="number" name="NBR_PARTICIPANT" placeholder="" value="<?php echo $_GET['NBR_PARTICIPANT'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Tous les résultats appartenant a cette éliminatoire seront supprimés !!!\n \n \nVeuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="epreuve.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>

</html>
 