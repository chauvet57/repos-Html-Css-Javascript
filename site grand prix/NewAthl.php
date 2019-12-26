<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();
require_once "ConnFede.php";
$federation = federation();

$ID_ATHLETE = "";
$ID_FEDERATION = "";
$NOM_ATHLETE = "";
$SEXE = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["ID_ATHLETE"];
$posts[1] = $_POST["ID_FEDERATION"];
$posts[2] = $_POST["NOM_ATHLETE"];
$posts[3] = $_POST["SEXE"];

return $posts;
}

// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO athlete(ID_FEDERATION,NOM_ATHLETE,SEXE) VALUES (:ID_FEDERATION,:NOM_ATHLETE,:SEXE)');
        $insertStmt->execute(
                  array(
                    ':ID_FEDERATION'=> $data[1],
                    ':NOM_ATHLETE'=> $data[2],
                    ':SEXE'=> $data[3]
                  ));
          if($insertStmt)
                  {?><div class="container">
                    <div class="span4 alert alert-success">
                       <div class="text-center">
                        <h1>Insertion Réussi</h1>
                        <hr>
                        <h2><a href="NewAthl.php" class="alert-link">Nouvel Athlète</a>&emsp;&emsp;&emsp;&emsp;<a href="athlete.php" class="alert-link">Retour</a></h2>
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
             
            <h1><label>Nom Athlète</label></h1>
            <input class="control-label" type="text" name="NOM_ATHLETE" placeholder="" value="<?php echo $NOM_ATHLETE;?>"><br><br>
            <h1><label>Sexe</label></h1>
            <select class="control-label" name="SEXE" id="SEXE">
        <option>M</option>
        <option>F</option>
        
      </select><br><br>
            
            
            <input class="alert btn-success" type="submit" name="insert" value="Insertion">
</div>        
        </form>  

     </td>    

</body>


</html>
 