<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnResu.php";
$resultat_athl = resultat_athl();
require_once "ConnElim.php";
$eliminatoire = eliminatoire();
require_once "ConnAthl.php";
$athlete = athlete();

$ID_ELIMINATOIRE = "";
$ID_ATHLETE = "";
$RANG_ATHLETE = "";
$POINTS_ATHLETE = "";
$RECORD = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["ID_ELIMINATOIRE"];
$posts[1] = $_POST["ID_ATHLETE"];
$posts[2] = $_POST["RANG_ATHLETE"];
$posts[3] = $_POST["POINTS_ATHLETE"];
$posts[4] = $_POST["RECORD"];

return $posts;
}

// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO athlete(ID_ATHLETE,RANG_ATHLETE,POINTS_ATHLETE,RECORD) VALUES (:ID_ATHLETE,:RANG_ATHLETE,:POINTS_ATHLETE,:RECORD)');
        $insertStmt->execute(
                  array(
                    ':ID_ATHLETE'=> $data[1],
                    ':RANG_ATHLETE'=> $data[2],
                    ':POINTS_ATHLETE'=> $data[3],
                    ':RECORD'=> $data[4]
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewResu.php" class="alert-link">Nouveau Résultat</a>&emsp;&emsp;&emsp;&emsp;<a href="resultat_athl.php" class="alert-link">Retour</a></h2>
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
            <select name="ID_ELIMINATOIRE">
            <?php
                    for($i=0; $i<sizeof($eliminatoire); $i++){
                      echo '<option value="'.$eliminatoire[$i]["ID_ELIMINATOIRE"].'">'.$eliminatoire[$i]["ID_ELIMINATOIRE"].'</option>';
                    }?>
                    </select> <br><br>
            <h1><label>Nom Athlète</label></h1>
            <select name="ID_ATHLETE">
                <?php
                    for($i=0; $i<sizeof($athlete); $i++){
                      echo '<option value="'.$athlete[$i]["ID_ATHLETE"].'">'.$athlete[$i]["NOM_ATHLETE"].'</option>';
                    }?>
                    </select><br><br>
            <h1><label>Rang</label></h1>
            <input class="control-label" type="text" name="RANG_ATHLETE" placeholder="" value="<?php echo $RANG_ATHLETE;?>"><br><br>
            <h1><label>Points</label></h1>
            <input class="control-label" type="text" name="POINTS_ATHLETE" placeholder="" value="<?php echo $POINTS_ATHLETE;?>"><br><br>
            <h1><label>Record</label></h1>
            <input class="control-label" type="text" name="RECORD" placeholder="" value="<?php echo $RECORD;?>"><br><br>
            
            
            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>        
        </form>  

     </td>    

</body>


</html>
 