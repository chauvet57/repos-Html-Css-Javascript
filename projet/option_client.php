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

$posts[0] = $_POST["id_client"];
$posts[1] = $_POST["nom_client"];
$posts[2] = $_POST["prenom_client"];
$posts[3] = $_POST["adresse"];
$posts[4] = $_POST["telephone"];
$posts[5] = $_POST["e_mail"];
$posts[6] = $_POST["civilite"];

return $posts;
}

// fonction modifier

if(isset($_POST["update"]))
{
  $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5]) || empty($data[6]) )
    {}   
    else {

        $updateStmt = $conn->prepare('UPDATE liste_client SET civilite = :civilite,nom_client = :nom_client,prenom_client = :prenom_client,adresse = :adresse,telephone = :telephone,e_mail = :e_mail WHERE id_client = :id_client');
        $updateStmt->execute(
                  array(
                    ':id_client'=> $data[0],
                    ':nom_client'=> $data[1],
                    ':prenom_client'=> $data[2],
                    ':adresse'=> $data[3],
                    ':telephone'=> $data[4],
                    ':e_mail'=> $data[5],
                    ':civilite'=> $data[6]
                  ));
          if($updateStmt)
             {?>
             <body onload="window.location.href = '#openModal';"> 
    <div id="openModal" class="modalDialog"> 
        <div> 
                    
                        <a href="liste_client.php" style="width:40px;" title="Close" class="closeX">X<br></a>
        
            
                        <h2 style="color:black">Modification <br>réussi</h2>
                        <br> 
                        <br>
                       
                        <a href="liste_client.php" style="margin-right:20px;margin-top:35px;" title="Close" class="close">Fermer</a>
                     
        </div> 
    </div>  
              
              <?php
                  }
         }
}

//fonction supprimer

if(isset($_POST["delete"]))
{
  $data = getPosts();
    if(empty($data[0]))
    {}   
    else {

        $deleteStmt = $conn->prepare('DELETE FROM liste_client WHERE id_client = :id_client');
        $deleteStmt->execute(
                  array(
                    ':id_client'=> $data[0],
                  ));
          if($deleteStmt)
              {?>
                     
                     <body onload="window.location.href = '#openModal';"> 
    <div id="openModal" class="modalDialog"> 
        <div> 
                    
                        <a href="liste_client.php" style="width:40px;" title="Close" class="closeX">X<br></a>
        
            
                        <h2 style="color:black">Suppression<br> réussi</h2>
                        <br> 
                        <br>
                       
                        <a href="liste_client.php" style="margin-right:20px;margin-top:35px;" title="Close" class="close">Fermer</a>
                     
        </div> 
    </div>  
              <?php
                  } 
         }
}

?>
<html>
    
    <head>
<?php include "includes/header.php";
    ?>
 


    </head>
    <header>
    
    
    </header>
    <br>
    <br>
    <body>

<main class="container col-lg-4 ">
<form action="" method="POST" >
  <fieldset>
    <div class="border">
            <div class="text-center container col-lg-7 ">        
                <h1>N° Client</h1>
                <input class="control-label text-center col-lg-3" type="text" name="id_client" placeholder="" value="<?php echo $_GET['id_client'];?>"><br>
                <h1>Civilité</h1>
                <select name="civilite">
            <option value="<?php echo $_GET['civilite'];?>"><?php echo $_GET['civilite']?></option>
            <option>Mr</option>
            <option>Mme</option>
            </select><br><br>
                <h1>Nom</h1>
                <input class="control-label text-center" required pattern="[A-Za-zÀ-ÿ ]{1,}" type="text" name="nom_client" placeholder="" value="<?php echo $_GET['nom_client'];?>"><br>
                <h1>Prenom</h1>
                <input class="control-label text-center" required pattern="[A-Za-zÀ-ÿ ]{1,}" type="text" name="prenom_client" placeholder="" value="<?php echo $_GET['prenom_client'];?>"><br>
                <h1>Adresse</h1>
                <input class="control-label text-center" required pattern="[A-Za-zÀ-ÿ /0-9]{1,}" type="text" name="adresse" placeholder="" value="<?php echo $_GET['adresse'];?>"><br>
                <h1>Téléphone</h1>
                <input class="control-label text-center" required pattern="[0-9 /-]{10,14}" type="text" name="telephone" placeholder="" value="<?php echo $_GET['telephone'];?>"><br>
                <h1>E-mail</h1>
                <input class="control-label text-center" style="height:38px;width:320px;" type="email" name="e_mail" placeholder="" value="<?php echo $_GET['e_mail'];?>"><br><br>
            </div>


<div class="col-lg-12 " >
    <div class="input-group " >
    &emsp;<a class="btnR" href="liste_client.php" role="button">   Retour   </a>&emsp;&emsp;
            <input href="" class="btnW" type="submit" onclick="return confirm('Vous confirmez les changements ?')" name="update" value="Modifier">&emsp;&emsp;
            <a href="#choixformulaire" role="button" class="btnS" data-toggle="modal">Formulaire</a>&emsp;&emsp;
            <input href="" class="btnA" type="submit" onclick="return confirm('Veuillez confirmer la Suppression ? ')" name="delete" value="Supprimer">
</div>
<br>
        </div>
</fieldset>            
</div>
         
</form>

</body>
 





  
</html>

    <div id="choixformulaire" class="modalDialog"> 
        <div> 
                    
        
                        <a href="liste_client.php" style="width:40px;" title="Close" class="closeX">X<br></a>
        
            
                        <h2 style="color:black">Formulaire client</h2>
                        <br> 
                        
                        <a href="formulaire8.php" style="margin-right:20px;margin-top:30px;" title="Close" class="close">Fiche patrimoniale</a>
                        <a href="formulaire1.php" style="margin-right:20px;margin-top:30px;"  title="Close" class="close">Document investisseur</a>
                        
                        
          
        </div> 
    </div>  
