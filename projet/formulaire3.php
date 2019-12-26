<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Investisseur Page 3</title>

<?php
include "menu.php";
include "includes/header.php";
?>


</head>

<body >

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire4.php" method="POST">
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
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:29%;">
                                        </div>
                                        <div class="progress-value"><span>29</span>%</div>
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
                                <legend><h2>Adresse</h2></legend>
                                <br>

                                <label for="adresse">Adresse postale:</label>
                                <textarea  required name="adresse"  rows=1 cols=40 ></textarea><br><br>

                                <label for="pays">Pays de résidence:</label>
                                <input class="container col-lg-6" type="text" required name="pays" id="pays" for="pays" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>

                                <label for="logement" >Logement:</label>
                                 <br>
<table class="container col-lg-12">                                
                                <tr height="40px">
                                <th width= 100px;><input type="checkbox" name="proprietaire1" id="proprietaire1" /> <label for="proprietaire1">Propriétaire</label></th>
                                <th width= 100px;><input type="checkbox" name="locataire1" id="locataire1" /> <label for="locataire1">Locataire</label></th>
                                <th width= 180px;><input type="checkbox" name="heberge1" id="heberge1" /> <label for="heberge1">Hébergé(e) à titre gratuit</label></th>
                                </tr>
</table> 
                                        <br>
                                       
                                </div>
                        </div>

                        <div class="col-lg-6 border">
                                <div class="text-center">           
                                <br>           
                                <legend><h2>Investisseur 2</h2></legend>
                                <br>
                                <legend><h2>Adresse</h2></legend>
                                <br>

                                <label for="adresse">Adresse postale:</label>
                                <textarea name="adresse" rows=1 cols=40></textarea><br><br>

                                <label for="pays">Pays de résidence:</label>
                                <input class="container col-lg-6" type="text" name="pays" id="pays" pattern="[A-Za-zÀ-ÿ ]{1,}" /><br>

                                <label for="logement">Logement:</label>
                                <br>
<table class="container col-lg-12">                                
                                <tr height="40px">
                                <th width= 100px;><input type="checkbox" name="proprietaire2" id="proprietaire2" /> <label for="proprietaire2">Propriétaire</label></th>
                                <th width= 100px;><input type="checkbox" name="locataire2" id="locataire2" /> <label for="locataire2">Locataire</label></th>
                                <th width= 180px;><input type="checkbox" name="heberge2" id="heberge2" /> <label for="heberge2">Hébergé(e) à titre gratuit</label></th>
                                </tr>
</table> 
                                        <br>
                                </div>
                        </div>
                </div>
        </div>

</fieldset>

<br>




<div class="text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
                <a class="btnR" href="formulaire2.php" role="button">Retour</a>&emsp;
                <button type="submit"  class="btnS" >Suivant</button>
        </div>
</div>
</form>
</body>
<!-- ############################################################################################################################# -->

</html>