<!DOCTYPE html>
<html lang="en">

<head>
        <title>Page 1</title>

<?php
include "menu.php";
include "includes/header.php";

?>

</head>

<body >




<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->
<form action="formulaire2.php" method="POST">
<fieldset>
<div class="border">
                <legend>
                
                        
                <div class="text-right">
                        <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
                        <h1>DOCUMENT CONNAISSANCE INVESTISSEUR</h1></legend>
                        <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:0%;">
                                        </div>
                                        <div class="progress-value"><span>0</span>%</div>
                                </div>       
                        </div>
        </div>
</fieldset>
<br>
<fieldset>

        <div class="text-center border"><br>
                <legend><h2>Consultant</h2></legend><br>

                <label for="raison social">Raison sociale:</label>
                <input class="container col-lg-3" type="text" required  name="raisonsociale" id="raisionsociale" for="raisionsociale" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>

                <label for="nom">Nom:</label>
                <input class="container col-lg-3" type="text" required name="nom" id="nom" for="nom" pattern="[A-Za-zÀ-ÿ ]{1,}"/>

                <label for="prenom">Prénom:</label>
                <input class="container col-lg-3" type="text" required name="prenom" id="prenom" for="prenom" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>

                <label for="date relation">Date entrée en relation:</label>
                <input style="width:130px;height:34px;font-size:20;" type="date" required name="daterelation" id="daterelation" for="daterelation" /><br>
                <br>
                
        </div>
    </fieldset>

<br>
<div class="text-right" style="margin-right:30px;">
                
                <a class="btnR" href="liste_client.php" role="button">Retour Client</a>&emsp;
                <button  type="submit" class="btnS" >Suivant</button>
                </div> <br>     
</form>


</main>
</body>
<!-- ############################################################################################################################# -->

</html>
