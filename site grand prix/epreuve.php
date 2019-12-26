<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once "ConnEpre.php";
$epreuve = epreuve();
include "myFunction.php";

?>


<html>
    
<head>
</head>
<header>
    <?php include "index.php";
    ?>
    
    </header>

<form action = "NewEpre.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvelle Epre" value = "Nouvelle Epreuve">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Spécialité<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Nom Session<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Date de Debut<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col">Date de Fin<br><input type="text" id="input_col4" onkeyup="myFunction4()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>
 
  <?php
    for($i=0; $i<sizeof($epreuve); $i++){
  ?>
    <tr>
    <td><?php echo $epreuve[$i]['ID_EPREUVE'];?></td>
    <td><?php echo $epreuve[$i]['NOM_SPECIALITE'];?></td>
    <td><?php echo $epreuve[$i]['NOM_SESSION'];?></td>
    <td><?php echo $epreuve[$i]['DATE_DEBUT_EPREUVE'];?></td>
    <td><?php echo $epreuve[$i]['DATE_FIN_EPREUVE'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionEpre.php?ID_EPREUVE='.$epreuve[$i]["ID_EPREUVE"].
          '&ID_SPECIALITE='.$epreuve[$i]["ID_SPECIALITE"].
          '&ID_SESSION='.$epreuve[$i]["ID_SESSION"].
          '&DATE_DEBUT_EPREUVE='.$epreuve[$i]["DATE_DEBUT_EPREUVE"].
          '&DATE_FIN_EPREUVE='.$epreuve[$i]["DATE_FIN_EPREUVE"].
          '\' " >Editer</button> </td>';     
          ?></td>
</tr>

<?php
}
?></thead>

</table></h1>
</main>

</html>