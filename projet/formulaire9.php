<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 2</title>

<?php
include "menu.php";
include "includes/header.php";
?>


</head>

<body >
 
<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->
<form action="formulaire10.php" methode="POST">
        <fieldset>
      <div class="text-center border ">
        <legend>
        <div class="text-right">
                <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
        <h1>VOTRE SITUATION FISCALE ET PATRIMONIALE</h1></legend>
        <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:12%;">
                                        </div>
                                        <div class="progress-value"><span>12</span>%</div>
                                </div>       
                        </div>
</div>
</fieldset>
<br>
<fieldset>
        <div class="container-fluid" >
                <div class="row">
                        <div class="col-lg-6 border ">
                                <div class="text-center">
                                <br>           
                                        <legend><h2>Revenus perçus par le foyer fiscal</h2></legend>
                                        <br><br>
                                        <label for="RevenusCap1">Revenus de Capitaux Mobiliers Imposables (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenusCap1" id="RevenusCap1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="RevenusFon1">Revenus Fonciers Nets (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenusFon1" id="RevenusFon1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="RevenusBrut1">Revenus Brut Global (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenusBrut1" id="RevenusBrut1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="CSGdeduc1">CSG Déductible (€) :</label>
                                        <input class=" col-lg-6" type="text" name="CSGdeduc1" id="CSGdeduc1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="Chargededuc1">Charges Déductibles du Revenu Global (€) :</label>
                                        <input class=" col-lg-6" type="text" name="Chargededuc1" id="Chargededuc1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="RevenuImpo1">Revenu Imposables (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenuImpo1" id="RevenuImpo1" pattern="[0-9,. ]{1,}" />
                                    </div>
                                <br>
                        </div>

                        <div class="col-lg-6 border ">
                                <div class="text-center">
                                <br>
                                        <legend><h2>Revenus perçus par le foyer fiscal</h2></legend>
                                        <br><br>
                                        <label for="RevenusCap1">Revenus de Capitaux Mobiliers Imposables (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenusCap1" id="RevenusCap1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="RevenusFon1">Revenus Fonciers Nets (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenusFon1" id="RevenusFon1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="RevenusBrut1">Revenus Brut Global (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenusBrut1" id="RevenusBrut1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="CSGdeduc1">CSG Déductible (€) :</label>
                                        <input class=" col-lg-6" type="text" name="CSGdeduc1" id="CSGdeduc1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="Chargededuc1">Charges Déductibles du Revenu Global (€) :</label>
                                        <input class=" col-lg-6" type="text" name="Chargededuc1" id="Chargededuc1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="RevenuImpo1">Revenu Imposables (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenuImpo1" id="RevenuImpo1" pattern="[0-9,. ]{1,}" />
                                        <br><br><br>
                                </div>
                         </div>
                </div>
        </div>
</fieldset>
<br>



<div class="text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
        <a class="btnR" href="formulaire8.php" role="button">Retour</a>&emsp;
        <button type="submit" class="btnS" >Suivant</button>
    </div>
</div>
</form>
</body>
<!-- ############################################################################################################################# -->

</html>  