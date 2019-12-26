<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Investisseur Page 7</title>

<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body>

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire01valide.php" method="POST">
        <fieldset>
        <div class="text-center border ">           
                <legend>
                <div class="text-right">
                        <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
                <h1>VOTRE SITUATION PROFESSIONNELLE</h1></legend>
                <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:86%;">
                                        </div>
                                        <div class="progress-value"><span>86</span>%</div>
                                </div>       
                        </div>
        </div>
</fieldset>
<br>
<fieldset>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-6 border ">
                                <div class="text-center">
                                <br>           
                                        <legend><h2>Investisseur 1</h2></legend>
                                        <br>

                                        <label for="statut">Statut(en activité):</label>
                                        <input class="container col-lg-5" type="text" name="statut" id="statut" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>
                                        <label for="profession">Profession (ou dernière profession):</label>
                                        <input class="container col-lg-5" type="text" name="profession" id="profession" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>
                                        <label for="ancienneté">Ancienneté(mois/Année):</label>
                                        <input class="container col-lg-5" type="text" name="ancienneté" id="ancienneté" pattern="[A-Za-z0-9À-ÿ /]{1,}" /><br>
                                        <label for="non salarie">Non salarié, nom de la société:</label>
                                        <input class="container col-lg-5" type="text" name="non salarie" id="non salarie" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>
                                        <label for="inactif">Sans activité,origine des revenus:</label>
                                        <input class="container col-lg-5" type="text" name="inactif" id="inactif" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br><br>
                                </div>
                        </div>

                        <div class="col-lg-6 border ">
                                <div class="text-center">
                                <br>           
                                        <legend><h2>Investisseur 2</h2></legend>
                                        <br>

                                        <label for="statut">Statut(en activité):</label>
                                        <input class="container col-lg-5" type="text" name="statut" id="statut" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>
                                        <label for="profession">Profession (ou dernière profession):</label>
                                        <input class="container col-lg-5" type="text" name="profession" id="profession" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>
                                        <label for="ancienneté">Ancienneté(mois/Année):</label>
                                        <input class="container col-lg-5" type="text" name="ancienneté" id="ancienneté" pattern="[A-Za-z0-9À-ÿ /]{1,}" /><br>
                                        <label for="non salarie">Non salarié, nom de la société:</label>
                                        <input class="container col-lg-5" type="text" name="non salarie" id="non salarie" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>
                                        <label for="inactif">Sans activité,origine des revenus:</label>
                                        <input class="container col-lg-5" type="text" name="inactif" id="inactif" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br><br>
                                </div>
                        </div>
                </div>
        </div>
</fieldset>
<br>

<div class="text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
                <a class="btnR" href="formulaire6.php" role="button">Retour</a>&emsp;
                <button type="submit" class="btnS" >Valider</button>
        </div>
</div>
</form>
</body>
<!-- ############################################################################################################################# -->

</html>      