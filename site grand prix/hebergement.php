<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once "ConnHebe.php";
$hebergement = hebergement();
include "myFunction.php";

?>

<html>
    
<head>
</head>
<header>
    <?php include "index.php";
    ?>
    
    </header>

<form action = "NewHebe.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvel Hebe" value = "Nouvel Hebergement">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Stade<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Nom Hebergement<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Distance<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col">Capacité<br><input type="text" id="input_col4" onkeyup="myFunction4()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>
  
  <?php
    for($i=0; $i<sizeof($hebergement); $i++){
?>
    <tr>
    <td><?php echo $hebergement[$i]['ID_HEBERGEMENT'];?></td>
    <td><?php echo $hebergement[$i]['NOM_STADE'];?></td>
    <td><?php echo $hebergement[$i]['NOM_HEBERGEMENT'];?></td>
    <td><?php echo $hebergement[$i]['DISTANCE_'];?></td>
    <td><?php echo $hebergement[$i]['CAPACITE_HEBERGEMENT'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionHebe.php?ID_HEBERGEMENT='.$hebergement[$i]["ID_HEBERGEMENT"].
          '&ID_STADE='.$hebergement[$i]["ID_STADE"].
          '&NOM_HEBERGEMENT='.$hebergement[$i]["NOM_HEBERGEMENT"].
          '&DISTANCE_='.$hebergement[$i]["DISTANCE_"].
          '&CAPACITE_HEBERGEMENT='.$hebergement[$i]["CAPACITE_HEBERGEMENT"].
          '\' " >Editer</button> </td>';
           ?></td>
</tr>

<?php
}
?></thead>

</table></h1>
</main>

</html>