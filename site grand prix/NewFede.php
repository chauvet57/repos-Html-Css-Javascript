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

//$posts[0] = $_POST["ID_FEDERATION"];
$posts[1] = $_POST["NOM_FEDE"];
$posts[2] = $_POST["DATE_INS_FEDE"];
$posts[3] = $_POST["DATE_AGR_FEDE"];

return $posts;
}
// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO federation(NOM_FEDE,DATE_INS_FEDE,DATE_AGR_FEDE) VALUES (:NOM_FEDE,:DATE_INS_FEDE,:DATE_AGR_FEDE)');
        $insertStmt->execute(
                  array(
                    ':NOM_FEDE'=> $data[1],
                    ':DATE_INS_FEDE'=> $data[2],
                    ':DATE_AGR_FEDE'=> $data[3]
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewFede.php" class="alert-link">Nouvelle Fédération</a>&emsp;&emsp;&emsp;&emsp;<a href="federation.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Nom Fédération</label></h1>
            <input class="control-label" type="text" name="NOM_FEDE" placeholder="" value="<?php echo $NOM_FEDE;?>"><br><br>
            <h1><label>Date d'inscription</label></h1>   
            <input class="control-label" type="date" name="DATE_INS_FEDE" placeholder="" value="<?php echo $DATE_INS_FEDE;?>"><br><br>
            <h1><label>Date d'agrément</label></h1>
            <input class="control-label" type="date" name="DATE_AGR_FEDE" placeholder="" value="<?php echo $DATE_AGR_FEDE;?>"><br><br>
            
            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
           </form>         
</div>
          </td>    

</body>

</html>
 