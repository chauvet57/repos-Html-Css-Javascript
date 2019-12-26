<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once "ConnSpec.php";
$specialite = specialite();
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

<form action = "NewSpec.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvelle spec" value = "Nouvelle Spécialité">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Spécialité<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>
  
  <tbody>
  <?php
    for($i=0; $i<sizeof($specialite); $i++){

?>
    <tr>
    <td><?php echo $specialite[$i]['ID_SPECIALITE'];?></td>
    <td><?php echo $specialite[$i]['NOM_SPECIALITE'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionSpec.php?ID_SPECIALITE='.$specialite[$i]["ID_SPECIALITE"].
          '&NOM_SPECIALITE='.$specialite[$i]["NOM_SPECIALITE"].
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