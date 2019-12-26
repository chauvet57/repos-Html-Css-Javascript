<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnStad.php";
$stade = stade();

$ID_TRANSPORT = "";
$ID_STADE = "";
$STATION = "";
$NOM_TRANSPORT = "";

function getPosts(){

$posts = array();

$posts[0] = $_POST["ID_TRANSPORT"];
$posts[1] = $_POST["ID_STADE"];
$posts[2] = $_POST["STATION"];
$posts[3] = $_POST["NOM_TRANSPORT"];

return $posts;
}


// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE transport SET ID_STADE = :ID_STADE,STATION = :STATION,NOM_TRANSPORT = :NOM_TRANSPORT WHERE ID_TRANSPORT = :ID_TRANSPORT');
        $updateStmt->execute(
                  array(
                    ':ID_TRANSPORT'=> $data[0],
                    ':ID_STADE'=> $data[1],
                    ':STATION'=> $data[2],
                    ':NOM_TRANSPORT'=> $data[3]
                  ));
          if($updateStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                      <div class="text-center">
                    <h1>Modification Réussi</h1>
                    <hr>
                    <h2><a href="transport.php" class="alert-link">Retour</a></h2>
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

        $deleteStmt = $conn->prepare('DELETE FROM transport WHERE ID_TRANSPORT = :ID_TRANSPORT');
        $deleteStmt->execute(
                  array(
                    ':ID_TRANSPORT'=> $data[0],
                   
                  ));
          if($deleteStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-danger">
                    <div class="text-center">
                      <h1>Suppression Réussi</h1>
                    <hr>
                    <h2><a href="transport.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Numéro Transport</label></h1>
            <input class="control-label" type="text" name="ID_TRANSPORT" placeholder="Numéro" value="<?php echo $_GET['ID_TRANSPORT'];?>"><br><br>
            <h1><label>Nom Stade</label></h1>
            <select name="ID_STADE">
            <option value="<?php echo $_GET['ID_STADE'];?>"><?php echo $stade[$_GET['ID_STADE']-1]["NOM_STADE"] ?></option>
            <?php
            
                 for($i=0; $i<sizeof($stade); $i++){
                   echo '<option value="'.$stade[$i]["ID_STADE"].'">'.$stade[$i]["NOM_STADE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Station</label></h1>
            <input class="control-label" type="text" name="STATION" placeholder="Nom Station" value="<?php echo $_GET['STATION'];?>"><br><br>
            <h1><label>Nom Transport</label></h1>
            <input class="control-label" type="text" name="NOM_TRANSPORT" placeholder="Nom Transport" value="<?php echo $_GET['NOM_TRANSPORT'];?>"><br><br>

            <input class="alert btn-warning" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">
            <input class="alert btn-danger" type="submit" onclick="return confirm('Veuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
            <a class="alert btn-info" href="transport.php" role="button">   Retour   </a>
</div>            
    </form>
</td>

</body>

</html>
 