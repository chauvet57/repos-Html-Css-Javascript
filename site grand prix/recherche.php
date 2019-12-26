<?php

//activation des erreurs php
error_reporting(E_ALL);
ini_set('display-errors','on');

//connexion à la bdd en activant les erreurs PDO
try{
  $bdd=new PDO('mysql:host=127.0.0.1;dbname=domaineexpertise','root','');
  // Activation des erreurs PDO
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
   $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e){
  echo "Erreur : ".$e->getMessage();
}


//récupération PROPRE des variables AVANT de les utiliser
$q = !empty($_GET['q']) ? $_GET['q'] : NULL; 
$strWhere  ="";

 if($q){
  $s = explode(" ", $q);

  if(count($s)>0){
    $array_tmp = array();
    foreach($s as $word){
      $array_tmp[] = " keywords LIKE '%".$word."%'";
    }
     $strWhere = " WHERE " . join(' OR ',$array_tmp) ;
  }  
 
 $sql = 'SELECT * FROM domaine strWhere';  
 //execution "propre" d'une requête 
 try{
  $result = $bdd->query($sql);
 }catch(Exception $e){
  echo "Erreur dans la requête :" .$sql ." <br>".$e->getMessage();
 }
}
?>
 
<form method="GET">
<input type="search" name="q" placeholder="Recherche..."/>
<input type="submit" value="valider"/>
</form>
 
<ul>
<?php 
if(!empty($result)){
  while($a = $result->fetch()) { 
    echo "<li>" .$a['nomDomaine'] ."</li>";
  }
}
?>
</ul>