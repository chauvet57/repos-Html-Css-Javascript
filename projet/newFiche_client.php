<!DOCTYPE html>

<?php

require_once "conn.php";
$conn=conn();

$id_client = "";
$nom_client = "";
$prenom_client = "";
$adresse = "";
$telephone = "";
$e_mail = "";
$civilite = "";

function getPosts(){

$posts = array();

//$posts[0] = $_POST["id_client"];
$posts[1] = $_POST["nom_client"];
$posts[2] = $_POST["prenom_client"];
$posts[3] = $_POST["adresse"];
$posts[4] = $_POST["telephone"];
$posts[5] = $_POST["e_mail"];
$posts[6] = $_POST["civilite"];

return $posts;
}

// fonction insertion
if(isset($_POST["insert"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5]) || empty($data[6]) )
    {}   
    else {

        $insertStmt = $conn->prepare('INSERT INTO liste_client(nom_client,prenom_client,adresse,telephone,e_mail,civilite) VALUES (:nom_client,:prenom_client,:adresse,:telephone,:e_mail,:civilite)');
        $insertStmt->execute(
                  array(
                    ':nom_client'=> $data[1],
                    ':prenom_client'=> $data[2],
                    ':adresse'=> $data[3],
                    ':telephone'=> $data[4],
                    ':e_mail'=> $data[5],
                    ':civilite'=> $data[6]
                  ));
          if($insertStmt)
                  {?>
                  <body onload="window.location.href = '#openModal';"> 
    <div id="openModal" class="modalDialog"> 
        <div> 
                    
        
                        <a href="liste_client.php" style="width:40px;" title="Close" class="closeX">X<br></a>
        
            
                        <h2 style="color:black">Client inscrit</h2>
                        <br> 
                        <a style="color:black;font-size:20px" >Voulez vous compléter</a> 
                        <a style="color:black;font-size:20px">les formulaires ?</a> 
         
                        <a href="formulaire8.php" style="margin-right:20px;margin-top:30px;" title="Close" class="close">Fiche patrimoniale</a>
                        <a href="formulaire1.php" style="margin-right:20px;margin-top:30px;"  title="Close" class="close">Document investisseur</a>
                        
          
        </div> 
    </div> 
                  
                  
                  <?php
                  }
        }
}
?>
<html>
    
    <head>
    </head>
    <header>
    <?php include "includes/header.php";
    ?>
    
    </header>

    <body>
<br>
<br>
<br>
    <main class="container col-lg-4 ">
    

        <form action="" method="POST">
          <fieldset>
            <div class="border">   
                <div class="text-center container col-lg-7 ">

                    <h1>Civilité</h1>
                                <select class="control-label" name="civilite" id="civilite">
                                    <option>Mme</option>
                                    <option>Mr</option>
                                </select><br><br>
                    <h1>Nom</h1>
                    <input class="control-label text-center" required pattern="[A-Za-zÀ-ÿ ]{1,}" type="text" name="nom_client" placeholder="" value="<?php echo $nom_client;?>">
                    <br><br>
                    <h1>Prénom</h1>
                    <input class="control-label text-center" required pattern="[A-Za-zÀ-ÿ ]{1,}" type="text" name="prenom_client" placeholder="" value="<?php echo $prenom_client;?>">
                    <br><br>
                    <h1>Adresse</h1>
                    <input class="control-label text-center" required pattern="[A-Za-zÀ-ÿ /0-9]{1,}"  type="text" name="adresse" placeholder="" value="<?php echo $adresse;?>">
                    <br><br>
                    <h1>Téléphone</h1>
                    <input class="control-label text-center" required pattern="[0-9 /-]{10,14}" type="text" name="telephone" placeholder="" value="<?php echo $telephone;?>">
                    <br><br>
                    <h1>E-mail</h1>
                    <input class="control-label text-center"  type="email" style="height:38px;width:320px;" name="e_mail" placeholder="" value="<?php echo $e_mail;?>">
                    <br><br>
             
            
            
            
                    
                <input  class="btnS" type="submit" onclick="return confirm('Vous confirmez le nouveau client ?')" name="insert"  value="Insertion">
            </div>      
            <br>       
        </fieldset>  
    </form>    

</body>

</html>
