<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Investisseur Page 4</title>

<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body>

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire5.php" methode="POST">
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
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:43%;">
                                        </div>
                                        <div class="progress-value"><span>43</span>%</div>
                                </div>       
                        </div>
  </div>
</fieldset>
<br>
<fieldset>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 border">

                  <div class="text-center">
                  <br>           
                  <legend><h2>Investisseur 1</h2></legend>
                  <br>
                  <legend><h2>Coordonnées</h2></legend>
                  <br>

                        <label for="teldom">Téléphone domicile:</label>
                        <input class="container col-lg-4" type="text" name="teldom"  id="teldom" pattern="[0-9/.-]{10,14}" />

                        <label for="telmob">Téléphone mobile:</label>
                        <input class="container col-lg-4" type="text" name="telmob" id="telmob" pattern="[0-9/.-]{10,14}" /><br>

                        <label for="telbur">Téléphone bureau:</label>
                        <input class="container col-lg-4" type="text" name="telbur" id="telbur" pattern="[0-9/.-]{10,14}" />

                        <label for="mail">E-mail:</label>
                        <input style="height:38px;" class="container col-lg-6" type="email" name="mail" id="mail" />
                  </div>
            </div>
            <div class="col-lg-6 border">

                  <div class="text-center">           
                  <br>           
                  <legend><h2>Investisseur 2</h2></legend>
                  <br>
                  <legend><h2>Coordonnées</h2></legend>
                  <br>

                        <label for="teldom">Téléphone domicile:</label>
                        <input class="container col-lg-4" type="text" name="teldom" id="teldom" pattern="[0-9]{10,14}" />

                        <label for="telmob">Téléphone mobile:</label>
                        <input class="container col-lg-4" type="text" name="telmob" id="telmob" pattern="[0-9/.-]{10,14}" /><br>

                        <label for="telbur">Téléphone bureau:</label>
                        <input class="container col-lg-4" type="text" name="telbur" id="telbur" pattern="[0-9/.-]{10,14}" />

                        <label for="mail">E-mail:</label>
                        <input  style="height:38px;" class="container col-lg-6" type="email" name="mail" id="mail" />
                        
                  </div><br>
            </div>
        </div>
    </div>
</fieldset>
<br>


<div class="text-right">
  <div class="btn-group" role="group" aria-label="Basic example">
    <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
    <a class="btnR" href="formulaire3.php" role="button">Retour</a>&emsp;
    <button type="submit" class="btnS">Suivant</button>
  </div>
</div>
</form>

</body>


<!-- ############################################################################################################################# -->

</html>