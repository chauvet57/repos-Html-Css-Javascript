<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnStad.php";
$stade = stade();

$ID_HEBERGEMENT = "";
$ID_STADE = "";
$NOM_HEBERGEMENT = "";
$DISTANCE_ = "";
$CAPACITE_HEBERGEMENT = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_HEBERGEMENT"];
$posts[1] = $_POST["ID_STADE"];
$posts[2] = $_POST["NOM_HEBERGEMENT"];
$posts[3] = $_POST["DISTANCE_"];
$posts[4] = $_POST["CAPACITE_HEBERGEMENT"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE hebergement SET ID_STADE = :ID_STADE,NOM_HEBERGEMENT = :NOM_HEBERGEMENT,DISTANCE_ = :DISTANCE_,CAPACITE_HEBERGEMENT = :CAPACITE_HEBERGEMENT WHERE ID_HEBERGEMENT = :ID_HEBERGEMENT');
        $updateStmt->execute(
                  array(
                    ':ID_HEBERGEMENT'=> $data[0],
                    ':ID_STADE'=> $data[1],
                    ':NOM_HEBERGEMENT'=> $data[2],
                    ':DISTANCE_'=> $data[3],
                    ':CAPACITE_HEBERGEMENT'=> $data[4]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="hebergement.php" class="alert-link">Retour</a></h2>
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

        $deleteStmt = $conn->prepare('DELETE FROM hebergement WHERE ID_HEBERGEMENT = :ID_HEBERGEMENT');
        $deleteStmt->execute(
                  array(
                    ':ID_HEBERGEMENT'=> $data[0],
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="hebergement.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Numéro Hebergement</label></h1>
            <input class="control-label" type="text" name="ID_HEBERGEMENT" placeholder="" value="<?php echo $_GET['ID_HEBERGEMENT'];?>"><br><br>
            <h1><label>Nom Stade</label></h1>
            <select name="ID_STADE">
            <?php
            
                 for($i=0; $i<sizeof($stade); $i++){
                   echo '<option value="'.$stade[$i]["ID_STADE"].'">'.$stade[$i]["NOM_STADE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Nom Hebergement</label></h1>
            <input class="control-label" type="text" name="NOM_HEBERGEMENT" placeholder="" value="<?php echo $_GET['NOM_HEBERGEMENT'];?>"><br><br>
            <h1><label>Distance</label></h1>
            <input class="control-label" type="text" name="DISTANCE_" placeholder="" value="<?php echo $_GET['DISTANCE_'];?>"><br><br>
            <h1><label>Capacité</label></h1>
            <input class="control-label" type="text" name="CAPACITE_HEBERGEMENT" placeholder="" value="<?php echo $_GET['CAPACITE_HEBERGEMENT'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Veuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="hebergement.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>


</html>