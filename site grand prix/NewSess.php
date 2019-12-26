<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();

$ID_SESSION = "";
$NOM_SESSION = "";
$DATE_DEBUT_SESSION = "";
$DATE_FIN_SESSION = "";
$ANNEE_SESSION = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["ID_SESSION"];
$posts[1] = $_POST["NOM_SESSION"];
$posts[2] = $_POST["DATE_DEBUT_SESSION"];
$posts[3] = $_POST["DATE_FIN_SESSION"];
$posts[4] = $_POST["ANNEE_SESSION"];

return $posts;
}
// fonction insertion

if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO session(NOM_SESSION,DATE_DEBUT_SESSION,DATE_FIN_SESSION,ANNEE_SESSION) VALUES (:NOM_SESSION,:DATE_DEBUT_SESSION,:DATE_FIN_SESSION,:ANNEE_SESSION)');
        $insertStmt->execute(
                  array(
                    ':NOM_SESSION'       => $data[1],
                    ':DATE_DEBUT_SESSION'=> $data[2],
                    ':DATE_FIN_SESSION'  => $data[3],
                    ':ANNEE_SESSION'     => $data[4]
                  ));
          if($insertStmt)
             {?><div class="container">
                <div class="span4 alert alert-success">
                   <div class="text-center">
                    <h1>Insertion Réussi</h1>
                    <hr>
                    <h2><a href="NewSess.php" class="alert-link">Nouvelle Session</a>&emsp;&emsp;&emsp;&emsp;<a href="session.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Nom Session</label></h1>
            <input class="control-label" type="text" name="NOM_SESSION" placeholder="" value="<?php echo $NOM_SESSION;?>"><br><br>
            <h1><label>Date Debut</label></h1>
            <input class="control-label" type="date" name="DATE_DEBUT_SESSION" placeholder="" value="<?php echo $DATE_DEBUT_SESSION;?>"><br><br>
            <h1><label>Date Fin</label></h1>
            <input class="control-label" type="date" name="DATE_FIN_SESSION" placeholder="" value="<?php echo $DATE_FIN_SESSION;?>"><br><br>
            <h1><label>Année</label></h1>
            <input class="control-label" type="year" name="ANNEE_SESSION" placeholder="" value="<?php echo $ANNEE_SESSION;?>"><br><br>

            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>         
          </form>
         
    </td>    
   </body>         


</html>