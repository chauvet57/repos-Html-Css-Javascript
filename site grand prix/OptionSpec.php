<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();

$ID_SPECIALITE = "";
$NOM_SPECIALITE = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_SPECIALITE"];
$posts[1] = $_POST["NOM_SPECIALITE"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) )
    {}   
    else {
        $updateStmt = $conn->prepare('UPDATE specialite SET NOM_SPECIALITE = :NOM_SPECIALITE WHERE ID_SPECIALITE = :ID_SPECIALITE');
        $updateStmt->execute(
                  array(
                    ':ID_SPECIALITE' => $data[0],
                    ':NOM_SPECIALITE'=> $data[1]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="specialite.php" class="alert-link">Retour</a></h2>
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

        $deleteStmt = $conn->prepare('DELETE FROM specialite WHERE ID_SPECIALITE = :ID_SPECIALITE');
        $deleteStmt->execute(
                  array(
                    ':ID_SPECIALITE'=> $data[0],
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="specialite.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Numéro Spécialité</label></h1>
            <input class="control-label" type="text" name="ID_SPECIALITE" placeholder="" value="<?php echo $_GET['ID_SPECIALITE'];?>"><br><br>
            <h1><label>Nom Spécialité</label></h1>
            <input class="control-label" type="text" name="NOM_SPECIALITE" placeholder="" value="<?php echo $_GET['NOM_SPECIALITE'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Veuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="specialite.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>

</html>
 