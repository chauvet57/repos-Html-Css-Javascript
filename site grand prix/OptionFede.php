<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();

$ID_FEDERATION = "";
$NOM_FEDE = "";
$DATE_INS_FEDE = "";
$DATE_AGR_FEDE = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_FEDERATION"];
$posts[1] = $_POST["NOM_FEDE"];
$posts[2] = $_POST["DATE_INS_FEDE"];
$posts[3] = $_POST["DATE_AGR_FEDE"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE federation SET NOM_FEDE = :NOM_FEDE,DATE_INS_FEDE = :DATE_INS_FEDE,DATE_AGR_FEDE = :DATE_AGR_FEDE WHERE ID_FEDERATION = :ID_FEDERATION');
        $updateStmt->execute(
                  array(
                    ':ID_FEDERATION'=> $data[0],
                    ':NOM_FEDE'=> $data[1],
                    ':DATE_INS_FEDE'=> $data[2],
                    ':DATE_AGR_FEDE'=> $data[3]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="federation.php" class="alert-link">Retour</a></h2>
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

        $deleteStmt = $conn->prepare('DELETE FROM athlete WHERE ID_FEDERATION IN
                                      (SELECT ID_FEDERATION FROM federation WHERE ID_FEDERATION = :ID_FEDERATION);
                                      DELETE FROM federation WHERE ID_FEDERATION = :ID_FEDERATION');
        $deleteStmt->execute(
                  array(
                    ':ID_FEDERATION'=> $data[0],
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="federation.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Numéro Fédération</label></h1>
            <input class="control-label" type="text" name="ID_FEDERATION" placeholder="" value="<?php echo $_GET['ID_FEDERATION'];?>"><br><br>
            <h1><label>Nom Fédération</label></h1>
            <input class="control-label" type="text" name="NOM_FEDE" placeholder="" value="<?php echo $_GET['NOM_FEDE'];?>"><br><br>
            <h1><label>Date d'inscription</label></h1>
            <input class="control-label" type="date" name="DATE_INS_FEDE" placeholder="" value="<?php echo $_GET['DATE_INS_FEDE'];?>"><br><br>
            <h1><label>Date d'agrément</label></h1>
            <input class="control-label" type="date" name="DATE_AGR_FEDE" placeholder="" value="<?php echo $_GET['DATE_AGR_FEDE'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Veuillez confirmer la Suppression ?')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="federation.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>

</html>
 