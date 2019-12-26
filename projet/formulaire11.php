<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 4</title>

<?php
include "menu.php";
include "includes/header.php";
?>
    

</head>

<body>

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire12.php" methode="POST">
    <fieldset>
	<div class="text-center border ">           
		<legend>
        <div class="text-right">
            <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
        <h1>PATRIMOINE IMMOBILIER</h1></legend>
		<div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:37%;">
                                        </div>
                                        <div class="progress-value"><span>37</span>%</div>
                                </div>       
                        </div>
</div>
</fieldset>
<br>
<fieldset>
<div class="container-fluide border" id="dynamic_form" >
<br>

        <div class="row">
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="libelle">Libellé :</label>
                        <input class="col-lg-9" type="text" name="libelle" id="libelle" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                        <label for="libelle">Dispositif Fiscal :</label>
                        <input class="col-lg-9" type="text" name="dispoFisc" id="dispoFisc" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                        <label for="dateAcqui">Date Acquisition :</label>
                        <input style="width:130px;height:34px;font-size:20;" type="date" name="dateAcqui[]" id="dateAcqui">
                    </div> 
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="valeurAcqui">Valeur Acquisition (€) :</label>
                        <input class="col-lg-9" type="text" name="valeurAcqui" id="valeurAcqui" pattern="[0-9,. ]{1,}">
                        <label for="loyerHc">Loyer Hors Charge (€) :</label>
                        <input class="col-lg-9" type="text" name="loyerHc" id="loyerHc" pattern="[0-9,. ]{1,}">
                        <label for="famille">Famille :</label>
                        <input class="col-lg-9" type="text" name="famille" id="famille" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                        <label for="adresse">Adresse :</label>
                        <input class="col-lg-9" type="text" name="adresse" id="adresse" pattern="[A-Za-zÀ-ÿ,. 0-9]{1,}">
                        <label for="Particularite">Particularités :</label>
                        <input class="col-lg-9" type="text" name="Particularite" id="Particularite" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="valeurVenale">Valeur Venale (€) :</label>
                        <input class="col-lg-9" type="text" name="valeurVenale" id="valeurVenale" pattern="[0-9,. ]{1,}">
                        <label for="charge">Charge (€) :</label>
                        <input class="col-lg-9" type="text" name="charge" id="charge" pattern="[0-9,. ]{1,}">
                        <label for="modeDetention">Mode Détention :</label>
                        <input class="col-lg-9" type="text" name="modeDetention" id="modeDetention" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="commun">Commun</label><br><br><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="commun" id="commun" />
                        <label for="commun"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.1">Invest.1</label><br><br><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="Invest.1" id="Invest.1" />
                        <label for="Invest.1"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.2">Invest.2</label><br><br><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="Invest.2" id="Invest.2" />
                        <label for="Invest.2"></label>
                    </div>
                </div>
        </div>
      
 
  <div class="button-group">&emsp;
    <button class="btnW" id="plus">Ajouter</button>
    <div class="text-right">
    <a  class="btnA" id="minus">Supprimer</a>&emsp;
  </div>
  <br>
  <br>
  </div>

</div>
</fieldset>
<br>
<fieldset>
    <div class="text border">
    <br>
   <div class="input-group">
        <label >&emsp;TOTAL PATRIMOINE IMMOBILIER BRUT (€) :&emsp;<input style="width:180px" type="text" pattern="[0-9,. ]{1,}">&emsp;&emsp;&emsp;TOTAL PATRIMOINE IMMOBILIER NET (€) :&emsp;<input style="width:180px" type="text" pattern="[0-9,. ]{1,}">&emsp;</label>      
    </div>
    </div>
</fieldset>
<br>

<div class="text-right">
	<div class="btn-group" role="group" aria-label="Basic example">
        <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
		<a class="btnR" href="formulaire10.php" role="button">Retour</a>&emsp;
		<button type="submit" class="btnS" >Suivant</button>
	</div>
</div>
<br>
</form>

</body>
<!-- ############################################################################################################################# -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js">
</script>
<script src="js/dynamic-form.js"></script>


</html> 


<script>

var dynamic_form =  $("#dynamic_form").dynamicForm("#dynamic_form","#plus", "#minus", {
});

</script>

<script>

var dynamic_form =  $("#dynamic_form").dynamicForm("#dynamic_form","#plus", "#minus", {
limit: 10,
formPrefix:
normalizeFullForm: false,
createColor: '',
removeColor： '',
duration: 3000,
data: {}

});

</script>
