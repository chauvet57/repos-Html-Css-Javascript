<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once "ConnResu.php";
$resultat_athl = resultat_athl();
include "myFunction.php";


?>
<html>
    
    <head>
    </head>

    <header>
    <?php include "index.php";
    ?>
    
    </header>

        
<body>
    <form action = "NewResu.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouveau Resul" value = "Nouveau Resultat">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro Eliminatoire<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Athlète<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Rang<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Points<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col">Record<br><input type="text" id="input_col4" onkeyup="myFunction4()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>
  
  <?php
    for($i=0; $i<sizeof($resultat_athl); $i++){
?>
    <tr>
    <td><?php echo $resultat_athl[$i]['ID_ELIMINATOIRE'];?></td>
    <td><?php echo $resultat_athl[$i]['NOM_ATHLETE'];?></td>
    <td><?php echo $resultat_athl[$i]['RANG_ATHLETE'];?></td>
    <td><?php echo $resultat_athl[$i]['POINTS_ATHLETE'];?></td>
    <td><?php echo $resultat_athl[$i]['RECORD'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionResu.php?ID_ELIMINATOIRE='.$resultat_athl[$i]["ID_ELIMINATOIRE"].
          '&ID_ATHLETE='.$resultat_athl[$i]["ID_ATHLETE"].
          '&RANG_ATHLETE='.$resultat_athl[$i]["RANG_ATHLETE"].
          '&POINTS_ATHLETE='.$resultat_athl[$i]["POINTS_ATHLETE"].
          '&RECORD='.$resultat_athl[$i]["RECORD"].
          '\' " >Editer</button> </td>';     
 ?></td>
</tr>

<?php
}
?></thead>

</table></h1>
</main>
</body>


</html>