<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once "ConnElim.php";
$eliminatoire = eliminatoire();
include "myFunction.php";

?>


<html>
    
<head>
</head>
<header>
    <?php include "index.php";
    ?>
    
    </header>


<form action = "NewElim.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvel Elim" value = "Nouvel Eliminatoire">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Spécialité<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Numéro Epreuve<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Date Eliminatoire<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col">Nombre de Participant<br><input type="text" id="input_col4" onkeyup="myFunction4()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>
  
  <?php
    for($i=0; $i<sizeof($eliminatoire); $i++){
  ?>
    <tr>
    <td><?php echo $eliminatoire[$i]['ID_ELIMINATOIRE'];?></td>
    <td><?php echo $eliminatoire[$i]['NOM_SPECIALITE'];?></td>
    <td><?php echo $eliminatoire[$i]['ID_EPREUVE'];?></td>
    <td><?php echo $eliminatoire[$i]['DATE_ELIMINATOIRE'];?></td>
    <td><?php echo $eliminatoire[$i]['NBR_PARTICIPANT'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionElim.php?ID_ELIMINATOIRE='.$eliminatoire[$i]["ID_ELIMINATOIRE"].
          '&ID_SPECIALITE='.$eliminatoire[$i]["ID_SPECIALITE"].
          '&ID_EPREUVE='.$eliminatoire[$i]["ID_EPREUVE"].
          '&DATE_ELIMINATOIRE='.$eliminatoire[$i]["DATE_ELIMINATOIRE"].
          '&NBR_PARTICIPANT='.$eliminatoire[$i]["NBR_PARTICIPANT"].
          '\' " >Editer</button> </td>';
          ?></td>
</tr>

<?php
}
?></thead>

</table></h1>
</main>

</html>