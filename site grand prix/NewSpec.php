<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();

$ID_SPECIALITE = "";
$NOM_SPECIALITE = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["ID_SPECIALITE"];
$posts[1] = $_POST["NOM_SPECIALITE"];

return $posts;
}
// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO specialite(NOM_SPECIALITE) VALUES (:NOM_SPECIALITE)');
        $insertStmt->execute(
                  array(
                    ':NOM_SPECIALITE'=> $data[1]
                
                  
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewSpec.php" class="alert-link">Nouvelle Spécialité</a>&emsp;&emsp;&emsp;&emsp;<a href="specialite.php" class="alert-link">Retour</a></h2>
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
        <body>
        <header>
    <?php include "index.php";
    ?>
    
    </header>
    <main class="container mt-5">
    <table class="table table-hover">
    <thead class="bg-light">

        <td><form action="" method="POST">
<div class="text-center">
            <h1><label>Nom Spécialité</label></h1>
            <input class="control-label" type="text" name="NOM_SPECIALITE" placeholder="" value="<?php echo $NOM_SPECIALITE;?>"><br><br>
            
            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>            
            </form>
            </td>
</body>
</html>