<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Investisseur Page 2</title>

<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body>

<main class="container col-lg-9" >
<br><br><br>
<!-- ############################################################################################################################# -->
<form action="formulaire3.php" methode="POST">
      <fieldset>
    <div class="text-center border" >           
    <legend>
    <div class="text-right">
          <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
    
    <h1>VOTRE SITUATION PERSONNELLE</h1></legend>
    <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:14%;">
                                        </div>
                                        <div class="progress-value"><span>14</span>%</div>
                                </div>       
                        </div>
    </div>
</fieldset>
<br>
<fieldset>
      <div class="container-fluid " >
            <div class="row">
                  <div class="col-lg-6 border" >
                  
                        <div class="text-center">
                               
                              <br>
                              <legend><h2>Investisseur 1</h2></legend>
                              <br>
                              <legend><h2>Identité</h2></legend>
                              <br>

                              <label for="civilite">Civilité : </label>
                              <select name="civilite" >
                              <option value="Mme" selected="selected" >Mme</option>
                              <option value="Mr">Mr</option>
                              </select>
                              <br><br>

                              <label for="nom">Nom:</label>
                              <input class="container col-lg-4" required type="text" name="nom" id="nom" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>

                              <label for="prenom">Prénom:</label>
                              <input class="container col-lg-4" required type="text" name="prenom" id="prenom" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>

                              <label for="nomNaissance">Nom de naissance:</label>
                              <input class="container col-lg-4" required type="text" name="nomNaissance" id="nomNaissance" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>

                              <label for="date naissance">Date de naissance:</label>
                              <input style="width:130px;height:34px;font-size:20;" required type="date" name="date naissance" id="datenaissance" />
                              <br>

                              <label for="lieu">à:</label>
                              <input class="container col-lg-4" required type="text" name="lieu" id="lieu" pattern="[A-Za-zÀ-ÿ /]{1,}" />
                              <br>

                              <label for="Nationalite">Nationalité:</label>
                              <input class="container col-lg-4" required type="text" name="Nationalite" id="Nationalite" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>
                        </div>
                  </div>

                  <div class="col-lg-6 border">

                        <div class="text-center"> 
                              
                              <br>
                              <legend><h2>Investisseur 2</h2></legend>
                              <br>
                              <legend><h2>Identité</h2></legend>
                              <br>
                                                                        
                              <label for="civilite">Civilité : </label>
                              <select name="civilite">
                              <option value="Mme" selected="selected">Mme</option>
                              <option value="Mr">Mr</option>
                              </select>
                              <br><br>

                              <label for="nom">Nom:</label>
                              <input class="container col-lg-4" type="text" name="nom" id="nom" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>

                              <label for="prenom">Prénom:</label>
                              <input class="container col-lg-4" type="text" name="prenom" id="prenom" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>

                              <label for="nomNaissance">Nom de naissance:</label>
                              <input class="container col-lg-4" type="text" name="nomNaissance" id="nomNaissance" pattern="[A-Za-zÀ-ÿ ]{1,}" />
                              <br>

                              <label for="date naissance">Date de naissance:</label>
                              <input style="width:130px;height:34px;font-size:20;" type="date" name="date naissance" id="datenaissance" />
                              <br>
                              <label for="lieu">à:</label>
                              <input class="container col-lg-4" type="text" name="lieu" id="lieu" pattern="[A-Za-zÀ-ÿ /]{1,}" />
                              <br>

                              <label for="Nationalite">Nationalité:</label>
                              <input class="container col-lg-4" type="text" name="Nationalite" id="Nationalite" pattern="[A-Za-zÀ-ÿ]{1,}" />
                              <br>
                         <br>
                  </div>
            </div>
      </div>

</fieldset> 
<br> 
</div><div class="text-right" style="margin-right:30px;">

                <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
                <a class="btnR" href="liste_client.php" role="button">Retour Client</a>&emsp;
                <button type="submit"  class="btnS" >Suivant</button>
                </div>

</form>
<br>





</body>
<!-- ############################################################################################################################# -->

</html>