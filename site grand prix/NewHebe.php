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

//$posts[0] = $_POST["ID_HEBERGEMENT"];
$posts[1] = $_POST["ID_STADE"];
$posts[2] = $_POST["NOM_HEBERGEMENT"];
$posts[3] = $_POST["DISTANCE_"];
$posts[4] = $_POST["CAPACITE_HEBERGEMENT"];

return $posts;
}
// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {
        echo "Nouvelle Insertion ";

    }   else {

        $insertStmt = $conn->prepare('INSERT INTO hebergement(ID_STADE,NOM_HEBERGEMENT,DISTANCE_,CAPACITE_HEBERGEMENT) VALUES (:ID_STADE,:NOM_HEBERGEMENT,:DISTANCE_,:CAPACITE_HEBERGEMENT)');
        $insertStmt->execute(
                  array(
                    ':ID_STADE'=> $data[1],
                    ':NOM_HEBERGEMENT'=> $data[2],
                    ':DISTANCE_'=> $data[3],
                    ':CAPACITE_HEBERGEMENT'=> $data[4]
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewHebe.php" class="alert-link">Nouvel Hebergement</a>&emsp;&emsp;&emsp;&emsp;<a href="hebergement.php" class="alert-link">Retour</a></h2>
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
        <h1><label>Nom Stade</label></h1>
        <select name="ID_STADE">
            <?php
                 for($i=0; $i<sizeof($stade); $i++){
                   echo '<option value="'.$stade[$i]["ID_STADE"].'">'.$stade[$i]["NOM_STADE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Nom Hebergement</label></h1>
            <input class="control-label" type="text" name="NOM_HEBERGEMENT" placeholder="" value="<?php echo $NOM_HEBERGEMENT;?>"><br><br>
            <h1><label>Distance</label></h1>
            <input class="control-label" type="number" name="DISTANCE_" placeholder="" value="<?php echo $DISTANCE_;?>"><br><br>
            <h1><label>Capacité</label></h1>
            <input class="control-label" type="number" name="CAPACITE_HEBERGEMENT" placeholder="" value="<?php echo $CAPACITE_HEBERGEMENT;?>"><br><br>

            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>            
     </form>
     </td>

</body>           


</html>