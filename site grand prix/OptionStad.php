<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnFede.php";
$federation = federation();

$ID_STADE = "";
$ID_FEDERATION = "";
$NOM_STADE = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_STADE"];
$posts[1] = $_POST["ID_FEDERATION"];
$posts[2] = $_POST["NOM_STADE"];


return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE stade SET ID_FEDERATION = :ID_FEDERATION,NOM_STADE = :NOM_STADE WHERE ID_STADE = :ID_STADE');
        $updateStmt->execute(
                  array(
                    ':ID_STADE'=> $data[0],
                    ':ID_FEDERATION'=> $data[1],
                    ':NOM_STADE'=> $data[2]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="stade.php" class="alert-link">Retour</a></h2>
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

        $deleteStmt = $conn->prepare('DELETE FROM transport WHERE ID_STADE IN
                                      (SELECT ID_STADE FROM stade WHERE ID_STADE = :ID_STADE);
                                      DELETE FROM stade WHERE ID_STADE = :ID_STADE');
        $deleteStmt->execute(
                  array(
                    ':ID_STADE'=> $data[0],
                   
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="stade.php" class="alert-link">Retour</a></h2>
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


    <td><form action="" method="POST"><td>
<div class="text-center">
            <h1><label>Numéro Stade</label></h1>
            <input class="control-label" type="text" name="ID_STADE" placeholder="" value="<?php echo $_GET['ID_STADE'];?>"><br><br>
            <h1><label>Nom Fédération</label></h1>
            
            <select name="ID_FEDERATION">
            <option value="<?php echo $_GET['ID_FEDERATION'];?>"><?php echo $federation[$_GET['ID_FEDERATION']-1]["NOM_FEDE"] ?></option>
            <?php
            
                 for($i=0; $i<sizeof($federation); $i++){
                   echo '<option value="'.$federation[$i]["ID_FEDERATION"].'">'.$federation[$i]["NOM_FEDE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Nom Stade</label></h1>
            <input class="control-label" type="text" name="NOM_STADE" placeholder="" value="<?php echo $_GET['NOM_STADE'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Tous les transports appartenant a ce stade seront supprimés !!!\n \n \nVeuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="stade.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>  


</html>
 