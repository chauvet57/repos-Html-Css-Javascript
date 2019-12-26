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

//$posts[0] = $_POST["ID_TRANSPORT"];
$posts[1] = $_POST["ID_STADE"];
$posts[2] = $_POST["STATION"];
$posts[3] = $_POST["NOM_TRANSPORT"];

return $posts;
}
// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) )
    {
        echo "Nouvelle Insertion ";

    }   else {

        $insertStmt = $conn->prepare('INSERT INTO transport(ID_STADE,STATION,NOM_TRANSPORT) VALUES (:ID_STADE,:STATION,:NOM_TRANSPORT)');
        $insertStmt->execute(
                  array(
                    ':ID_STADE'=> $data[1],
                    ':STATION'=> $data[2],
                    ':NOM_TRANSPORT'=> $data[3]
                  ));
          if($insertStmt)
          {?><div class="container">
            <div class="span4 alert alert-success">
               <div class="text-center">
                <h1>Insertion Réussi</h1>
                <hr>
                <h2><a href="NewTran.php" class="alert-link">Nouveau Transport</a>&emsp;&emsp;&emsp;&emsp;<a href="transport.php" class="alert-link">Retour</a></h2>
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
            <h1><label>Station</label></h1>
            <input class="control-label" type="text" name="STATION" placeholder="" value="<?php echo $STATION;?>"><br><br>
            <h1><label>Nom Transport</label></h1>
            <input class="control-label" type="text" name="NOM_TRANSPORT" placeholder="" value="<?php echo $NOM_TRANSPORT;?>"><br><br>

            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>
            </form>         

          </td>    

</body>

</html>
 