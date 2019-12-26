<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once "ConnSess.php";
$session = session();
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

<form action = "NewSess.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvelle Sess" value = "Nouvelle Session">
 </form>

    <table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Session<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Date de Debut<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Date de Fin<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col">Année<br><input type="text" id="input_col4" onkeyup="myFunction4()" placeholder="Recherche.."></th>
      <th scope="col"></th>
      </tr>
  
  <?php
    for($i=0; $i<sizeof($session); $i++){
?>
    <tr>
    <td><?php echo $session[$i]['ID_SESSION'];?></td>
    <td><?php echo $session[$i]['NOM_SESSION'];?></td>
    <td><?php echo $session[$i]['DATE_DEBUT_SESSION'];?></td>
    <td><?php echo $session[$i]['DATE_FIN_SESSION'];?></td>
    <td><?php echo $session[$i]['ANNEE_SESSION'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionSess.php?ID_SESSION='.$session[$i]["ID_SESSION"].
          '&NOM_SESSION='.$session[$i]["NOM_SESSION"].
          '&DATE_DEBUT_SESSION='.$session[$i]["DATE_DEBUT_SESSION"].
          '&DATE_FIN_SESSION='.$session[$i]["DATE_FIN_SESSION"].
          '&ANNEE_SESSION='.$session[$i]["ANNEE_SESSION"].
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