<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once "ConnRecom.php"
$recompense = recompense();

?>

<html>
    
<head>
</head>
    <header>
    <?php include "index.php";
    ?>
    
    </header>


<main class="container mt-5">
<table class="table table-hover">
<thead class="bg-light">

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Nom Sponsor</th>
      <th scope="col">Nom du Lot</th>
      <th scope="col">Don</th>
    </tr>
  </thead>
  <tbody>
  <?php
    for($i=0; $i<sizeof($recompense); $i++){

?>
    <tr>
    <th><?php echo $recompense[$i]['ID_RECOMPENSE'];?></th>
    <th><?php echo $recompense[$i]['NOM_SPONSOR'];?></th>
    <th><?php echo $recompense[$i]['NOM_LOT'];?></th>
    <th><?php echo $recompense[$i]['DON'];?></th>
</tr>

<?php
}
?>
</tbody>
</table></h1>
</main>
</body>



</html>