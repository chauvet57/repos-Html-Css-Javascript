<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once "ConnFede.php";
$federation = federation();
include "myFunction.php";

?>


<html>
    
<head>
        
</head>
    
<header>
<?php include "index.php";
     
?>

</header>

  <form action = "NewFede.php" method = "get">
 <input class="alert btn-success" type = "submit" name = "Nouvelle fede" value = "Nouvelle Fédération">
 </form>
 
    <table id="myTable" class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Numéro<br><input type="text" id="input_col0" onkeyup="myFunction0()" placeholder="Recherche.."></th>
      <th scope="col">Nom Fédération<br><input type="text" id="input_col1" onkeyup="myFunction1()" placeholder="Recherche.."></th>
      <th scope="col">Date Inscription<br><input type="text" id="input_col2" onkeyup="myFunction2()" placeholder="Recherche.."></th>
      <th scope="col">Date Agrément<br><input type="text" id="input_col3" onkeyup="myFunction3()" placeholder="Recherche.."></th>
      <th scope="col"></a></th>
    </tr>
  
  
 <tr>
 <?php
    for($i=0; $i<sizeof($federation); $i++){
?>

    <td><?php echo $federation[$i]['ID_FEDERATION'];?></td>
    <td><?php echo $federation[$i]['NOM_FEDE'];?></td>
    <td><?php echo $federation[$i]['DATE_INS_FEDE'];?></td>
    <td><?php echo $federation[$i]['DATE_AGR_FEDE'];?></td>
    <td><?php echo '<td> <button type="button" class="alert btn-success" 
          onclick="javascript:location.href=\'OptionFede.php?ID_FEDERATION='.$federation[$i]["ID_FEDERATION"].
          '&NOM_FEDE='.$federation[$i]["NOM_FEDE"].
          '&DATE_INS_FEDE='.$federation[$i]["DATE_INS_FEDE"].
          '&DATE_AGR_FEDE='.$federation[$i]["DATE_AGR_FEDE"].
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