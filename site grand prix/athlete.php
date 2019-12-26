<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once "ConnAthl.php";
$athlete = athlete();
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

<form action = "NewAthl.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvel Athlete" value = "Nouvel Athlete">
 </form>
 
<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Athlete<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Sexe<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Nom Fédération<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>
 <tr>
  <?php
    for($i=0; $i<sizeof($athlete); $i++){
?>
    <tr>
    <td><?php echo $athlete[$i]['ID_ATHLETE'];?></td>
    <td><?php echo $athlete[$i]['NOM_ATHLETE'];?></td>
    <td><?php echo $athlete[$i]['SEXE'];?></td>
    <td><?php echo $athlete[$i]['NOM_FEDE'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionAthl.php?ID_ATHLETE='.$athlete[$i]["ID_ATHLETE"].
          '&ID_FEDERATION='.$athlete[$i]["ID_FEDERATION"].
          '&NOM_ATHLETE='.$athlete[$i]["NOM_ATHLETE"].
          '&SEXE='.$athlete[$i]["SEXE"].
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
