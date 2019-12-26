<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once "ConnTran.php";
$transport = transport();
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

<form action = "NewTran.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouveau Tran" value = "Nouveau Transport">
 </form>

<table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Stade<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Station<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Nom Transport<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col"></th>
    </tr>  
  
  <?php
    for($i=0; $i<sizeof($transport); $i++){
  ?>
    <tr>
    <td><?php echo $transport[$i]['ID_TRANSPORT'];?></td>
    <td><?php echo $transport[$i]['NOM_STADE'];?></td>
    <td><?php echo $transport[$i]['STATION'];?></td>
    <td><?php echo $transport[$i]['NOM_TRANSPORT'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionTran.php?ID_TRANSPORT='.$transport[$i]["ID_TRANSPORT"].
          '&ID_STADE='.$transport[$i]["ID_STADE"].
          '&STATION='.$transport[$i]["STATION"].
          '&NOM_TRANSPORT='.$transport[$i]["NOM_TRANSPORT"].
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