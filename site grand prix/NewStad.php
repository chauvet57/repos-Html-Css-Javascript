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

//$posts[0] = $_POST["ID_STADE"];
$posts[1] = $_POST["ID_FEDERATION"];
$posts[2] = $_POST["NOM_STADE"];


return $posts;
}
// fonction insertion

if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) )
    {echo "Nouvelle Insertion ";}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO stade(ID_FEDERATION,NOM_STADE) VALUES (:ID_FEDERATION,:NOM_STADE)');
        $insertStmt->execute(
                  array(
                    ':ID_FEDERATION' => $data[1],
                    ':NOM_STADE'     => $data[2]
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewStad.php" class="alert-link">Nouveau Stade</a>&emsp;&emsp;&emsp;&emsp;<a href="stade.php" class="alert-link">Retour</a></h2>
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
            
            <select name="ID_FEDERATION">
            <?php
                 for($i=0; $i<sizeof($federation); $i++){
                   echo '<option value="'.$federation[$i]["ID_FEDERATION"].'">'.$federation[$i]["NOM_FEDE"].'</option>';
                 }?>
                 </select><br><br>
            <h1><label>Nom Stade</label></h1>
            <input type="text" name="NOM_STADE" placeholder="" value="<?php echo $NOM_STADE;?>"><br><br>

            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>            
          </form>
        </td>

</body>  

</html> 