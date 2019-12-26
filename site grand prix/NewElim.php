<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnEpre.php";
$epreuve = epreuve();
require_once "ConnSpec.php";
$specialite = specialite();

$ID_ELIMINATOIRE = "";
$ID_SPECIALITE = "";
$ID_EPREUVE = "";
$DATE_ELIMINATOIRE = "";
$NBR_PARTICIPANT = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["ID_ELIMINATOIRE"];
$posts[1] = $_POST["ID_SPECIALITE"];
$posts[2] = $_POST["ID_EPREUVE"];
$posts[3] = $_POST["DATE_ELIMINATOIRE"];
$posts[4] = $_POST["NBR_PARTICIPANT"];

return $posts;
}
// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO eliminatoire(ID_SPECIALITE,ID_EPREUVE,DATE_ELIMINATOIRE,NBR_PARTICIPANT) VALUES (:ID_SPECIALITE,:ID_EPREUVE,:DATE_ELIMINATOIRE,:NBR_PARTICIPANT)');
        $insertStmt->execute(
                  array(
                    ':ID_SPECIALITE'=> $data[1],
                    ':ID_EPREUVE'=> $data[2],
                    ':DATE_ELIMINATOIRE'=> $data[3],
                    ':NBR_PARTICIPANT'=> $data[4]
                   ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewElim.php" class="alert-link">Nouvel Eliminatoire</a>&emsp;&emsp;&emsp;&emsp;<a href="eliminatoire.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Nom Spécialité</label></h1>
                <select name="ID_SPECIALITE">
                <?php
                    for($i=0; $i<sizeof($specialite); $i++){
                      echo '<option value="'.$specialite[$i]["ID_SPECIALITE"].'">'.$specialite[$i]["NOM_SPECIALITE"].'</option>';
                    }?>
                    </select><br><br>
                    <h1><label>Numéro Epreuve</label></h1>
                    <select name="ID_EPREUVE">
                <?php
                    for($i=0; $i<sizeof($epreuve); $i++){
                      echo '<option value="'.$epreuve[$i]["ID_EPREUVE"].'">'.$epreuve[$i]["ID_EPREUVE"].'</option>';
                    }?>
                    </select> <br><br>
                    <h1><label>Date Eliminatoire</label></h1>
                <input class="control-label" type="date" name="DATE_ELIMINATOIRE" placeholder="" value="<?php echo $DATE_ELIMINATOIRE;?>"><br><br>
                <h1><label>Nombre Participant</label></h1>
                <input class="control-label" type="number" name="NBR_PARTICIPANT" placeholder="" value="<?php echo $NBR_PARTICIPANT;?>"><br><br>

                
                <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>            
            </form>                    
     </td> 
</body> 


</html>
 