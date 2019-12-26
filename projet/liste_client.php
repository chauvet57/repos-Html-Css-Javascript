<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Liste Client</title>

<?php
include "menu.php";
include "includes/header.php";
require_once "conn_liste_client.php";
$liste_client = liste_client();


?>



</head>
<body>

        

<main class="container col-lg-9">

 <br>
 <br>
 <br>

<!-- ############################################################################################################################# -->
<fieldset>
<div class="border">
          <div class="row">
                   
                                <label class="col-lg-6" style="margin-left:30px;"><h2> <?php echo "Bonjour $user, vous êtes connectés"; ?></h2></label>
                                <h2><span class="col-lg-6" style="margin-left:50px;" id="date_heure"></span></h2>
                                <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                      </div>
                        
                                <h1>LISTE CLIENT</h1>
                                <br>
                                
                                <input class="col-lg-3" type="text-left " style="margin-left:20px; height:40px;font-size:25px; width:260px; bottom:2px;" id="input_col1" onkeyup="myFunction()" placeholder="Recherche par Nom ⌕">&emsp;&emsp;
        <select  style="height:40px;" name="" id=""> <!-- faut filtrer les clients par rapport a une ou plusieur rubrique-->
        <option></option>
                <option >Capital Investissement</option>
                <option >Assurance Vie</option>
                <option >PINEL</option>
                <option >SCPI</option>
        </select>

        <input type="search" style="height:40px;font-size:25px;margin-left:540px; bottom:2px;" placeholder="Rechercher ... ⌕" name="the_search">
                            
                                <br><br>
</div>
                       
</fieldset>
<br>

<fieldset>

        <div class="text-center border" >

        <div style="width:100%; height:600px; overflow:auto;">
<table class="avectri col-lg-12 table-striped" id="table_client" cellspacing="0" cellpadding="0"  width="325"  >
    <thead >
            <tr><br>
               
                <th>Civilité</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th  data-tri="1" class="selection" data-type="num">E-mail</th>
              
                
            </tr>
    </thead>
    
    <tbody >
            <tr>
            <?php
            for($i=0; $i<sizeof($liste_client); $i++){
                ?>
               
                <td><?php echo $liste_client[$i]['civilite'];?></td>
                <td><?php echo $liste_client[$i]['nom_client'];?></td>
                <td><?php echo $liste_client[$i]['prenom_client'];?></td>
                <td><?php echo $liste_client[$i]['adresse'];?></td>
                <td><?php echo $liste_client[$i]['telephone'];?></td>
                <td><?php echo $liste_client[$i]['e_mail'];?></td>
                <td><?php echo '<td> <button type="button" class="btnR"><h3>≚</h3></button>
                
                <button type="button" class="btnW" 
                                onclick="javascript:location.href=\'option_client.php?id_client='.$liste_client[$i]["id_client"].
                                '&civilite='.$liste_client[$i]["civilite"].
                                '&nom_client='.$liste_client[$i]["nom_client"].
                                '&prenom_client='.$liste_client[$i]["prenom_client"].
                                '&adresse='.$liste_client[$i]["adresse"].
                                '&telephone='.$liste_client[$i]["telephone"].
                                '&e_mail='.$liste_client[$i]["e_mail"].
                                '\' " >✎</button> </td>';
                                ?></td>
                                <td><div style="width:50px">

<a>DCI</a>

<div class="border" style="margin-bottom:25px">
  <div class="alert-info" style="height:10px;width:20%"></div>
</div>

</div></td> <!-- insertion de la progression du remplissage en % -->
                                <td><div style="width:50px">

<a>FP</a>

<div class="border" style="margin-bottom:25px">
  <div class="alert-danger" style="height:10px;width:20%"></div>
</div>

</div></td> <!-- insertion de la progression du remplissage en % -->
                                

            </tr>
            <?php
}

?>      
    </tbody>
</table>
</div>

</div>

</fieldset>
<br>


<a href = "newFiche_client.php" method = "get">
 <input class="btnS" type = "submit" name = "nouveau_client" value = "Nouveau Client">
</a>

</body>

</html>



<script>


function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input_col1");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_client");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
  
}

</script>
