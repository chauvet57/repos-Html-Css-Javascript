<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->
<title>Formulaire Patriomonial Validé</title>

<?php
include "menu.php";
include "includes/header.php";
?>    

</head>

<body >

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<fieldset>
        <div class="text-center border">           
                <legend>
                <div class="text-right">
                    <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
                <br>
                <br>
                <h1>VALIDATION DU FORMULAIRE PATRIMONIAL </h1></legend>
                <br>
            
                <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:100%;">
                                        </div>
                                        <div class="progress-value"><span>100</span>%</div>
                                </div>       
                        </div>
        </div>
</fieldset>
<br>

<fieldset>
    <div class="text-center border" >           
        <legend><h1>RETOUR FICHE CLIENT</h1></legend>
        <br>
        <br>
        <a class="btnR" href="liste_client.php" role="button">Retour à la liste client</a>
    <br>
    <br>
    <br>
    </div>
</fieldset>
<br>





















<div class="text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btnA" href="index.php" role="button">Annuler</a>&emsp;
                <a class="btnR" href="formulaire7.php" role="button">Retour</a>
                
        </div>
</div>

</body>
<!-- ############################################################################################################################# -->

</html>      