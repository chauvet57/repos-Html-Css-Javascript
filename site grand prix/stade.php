<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once "ConnStad.php";
$stade = stade();
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
<form action = "NewStad.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouveau Stad" value = "Nouveau Stade">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Fédération<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Nom Stade<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col"></th>
      </tr>
 
  <?php
    for($i=0; $i<sizeof($stade); $i++){
?>
    <tr>
    <td><?php echo $stade[$i]['ID_STADE'];?></td>
    <td><?php echo $stade[$i]['NOM_FEDE'];?></td>
    <td><?php echo $stade[$i]['NOM_STADE'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionStad.php?ID_STADE='.$stade[$i]["ID_STADE"].
          '&ID_FEDERATION='.$stade[$i]["ID_FEDERATION"].
          '&NOM_STADE='.$stade[$i]["NOM_STADE"].
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