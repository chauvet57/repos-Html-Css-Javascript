<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnFede.php";
$federation = federation();

$ID_ATHLETE = "";
$ID_FEDERATION = "";
$NOM_ATHLETE = "";
$SEXE = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_ATHLETE"];
$posts[1] = $_POST["ID_FEDERATION"];
$posts[2] = $_POST["NOM_ATHLETE"];
$posts[3] = $_POST["SEXE"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE athlete SET ID_FEDERATION = :ID_FEDERATION,NOM_ATHLETE = :NOM_ATHLETE,SEXE = :SEXE WHERE ID_ATHLETE = :ID_ATHLETE');
        $updateStmt->execute(
                  array(
                    ':ID_ATHLETE'=> $data[0],
                    ':ID_FEDERATION'=> $data[1],
                    ':NOM_ATHLETE'=> $data[2],
                    ':SEXE'=> $data[3]
                  ));
          if($updateStmt)
             {?><div class="container">
                <div class="span4 alert alert-success">
                  <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="athlete.php" class="alert-link">Fermer</a></h2>
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

        $deleteStmt = $conn->prepare('DELETE FROM resultat_athl WHERE ID_ATHLETE IN
                                     (SELECT ID_ATHLETE FROM athlete WHERE ID_ATHLETE = :ID_ATHLETE);
                                      DELETE FROM athlete WHERE ID_ATHLETE = :ID_ATHLETE');
        $deleteStmt->execute(
                  array(
                    ':ID_ATHLETE'=> $data[0],
                  ));
          if($deleteStmt)
              {?><div class="container">
                  <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="athlete.php" class="alert-link">Fermer</a></h2>
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
            <h1><label>Numéro Athlete</label></h1>
            <input class="control-label" type="text" name="ID_ATHLETE" placeholder="" value="<?php echo $_GET['ID_ATHLETE'];?>"><br><br>
            <h1><label>Nom Fédération</label></h1>
           <select name="ID_FEDERATION">
            <option value="<?php echo $_GET['ID_FEDERATION'];?>"><?php echo $federation[$_GET['ID_FEDERATION']-1]["NOM_FEDE"] ?></option>
            <?php
            
                 for($i=0; $i<sizeof($federation); $i++){
                   echo '<option value="'.$federation[$i]["ID_FEDERATION"].'">'.$federation[$i]["NOM_FEDE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Nom Athlète</label></h1>
            <input class="control-label" type="text" name="NOM_ATHLETE" placeholder="" value="<?php echo $_GET['NOM_ATHLETE'];?>"><br><br>
            <h1><label>Sexe</label></h1>
            <select name="SEXE">
            <option value="<?php echo $_GET['SEXE'];?>"><?php echo $_GET['SEXE']?></option>
            <option>M</option>
            <option>F</option>
            </select><br><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Tous les résultats appartenant a cet athlete seront supprimés !!!\n \n \nVeuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="athlete.php" role="button">   Retour   </a>
</div>
            </td>
    </form>

</body>
    
</html>
 