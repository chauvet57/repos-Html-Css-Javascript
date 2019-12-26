<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnSpec.php";
$specialite = specialite();
require_once "ConnSess.php";
$session = session();

$ID_EPREUVE = "";
$ID_SPECIALITE = "";
$ID_SESSION = "";
$DATE_FIN_EPREUVE = "";
$DATE_FIN_EPREUVE = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["ID_EPREUVE"];
$posts[1] = $_POST["ID_SPECIALITE"];
$posts[2] = $_POST["ID_SESSION"];
$posts[3] = $_POST["DATE_DEBUT_EPREUVE"];
$posts[4] = $_POST["DATE_FIN_EPREUVE"];

return $posts;
}
// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO epreuve(ID_SPECIALITE,ID_SESSION,DATE_DEBUT_EPREUVE,DATE_FIN_EPREUVE) VALUES (:ID_SPECIALITE,:ID_SESSION,:DATE_DEBUT_EPREUVE,:DATE_FIN_EPREUVE)');
        $insertStmt->execute(
                  array(
                    ':ID_SPECIALITE'=> $data[1],
                    ':ID_SESSION'=> $data[2],
                    ':DATE_DEBUT_EPREUVE'=> $data[3],
                    ':DATE_FIN_EPREUVE'=> $data[4]
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewEpre.php" class="alert-link">Nouvelle Epreuve</a>&emsp;&emsp;&emsp;&emsp;<a href="epreuve.php" class="alert-link">Retour</a></h2>
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
                    <h1><label>Nom Session</label></h1>
               <select name="ID_SESSION">
                <?php
                    for($i=0; $i<sizeof($session); $i++){
                      echo '<option value="'.$session[$i]["ID_SESSION"].'">'.$session[$i]["NOM_SESSION"].'</option>';
                    }?>
                    </select><br><br>
            <h1><label>Date Debut</label></h1>
            <input class="control-label" type="date" name="DATE_DEBUT_EPREUVE" placeholder="" value="<?php echo $DATE_DEBUT_EPREUVE;?>"><br><br>
            <h1><label>Date Fin</label></h1>
            <input class="control-label" type="date" name="DATE_FIN_EPREUVE" placeholder="" value="<?php echo $DATE_FIN_EPREUVE;?>"><br><br>

            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>            
          </form>                    
     </td>    

</body>

</html>