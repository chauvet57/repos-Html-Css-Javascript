<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 7</title>

<?php
include "menu.php";
include "includes/header.php";
?>
    

</head>

<body >

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire15.php" >
    <fieldset>
	<div class="text-center border ">           
		<legend>
        <div class="text-right">
            <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
        <h1>FINANCEMENTS IMMOBILIERS ET AUTRES CREDITS</h1></legend><br>
		<div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:75%;">
                                        </div>
                                        <div class="progress-value"><span>75</span>%</div>
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
                        <label for="objetpret">Objet du prêt :</label>
                        <input class="col-lg-9" type="text" name="objetpret" id="objetpret" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                        <br><br><br><br>
                                    <div class="col-lg-9">
                                        <input type="checkbox" name="amorti" id="amorti" /> <label for="amorti">Amortissable </label>
                                        <br>
                                        <input type="checkbox" name="inFine" id="inFine" /> <label for="inFine">In Fine</label>
                                    </div>
                    </div> 
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="montantCredit">Montant Credit (€) :</label>
                        <input class="col-lg-9" type="text" name="montantCredit" id="montantCredit" pattern="[0-9,. ]{1,}">
                        <label for="CRD">CRD (€) :</label>
                        <input class="col-lg-9" type="text" name="CRD" id="CRD" pattern="[0-9,. ]{1,}">
                        <label for="mensualite">Mensualité (€/mois) :</label>
                        <input class="col-lg-9" type="text" name="mensualite" id="mensualite" pattern="[0-9,. ]{1,}">
                        <label for="tauxNominal">Taux Nominal (%) :</label>
                        <input class="col-lg-9" type="text" name="tauxNominal" id="tauxNominal" pattern="[0-9,. %]{1,}">
                        <label for="TAEG">TAEG (%) :</label>
                        <input class="col-lg-9" type="text" name="TAEG" id="TAEG" pattern="[0-9,. %]{1,}">
                        <label for="Particularite">Particularités :</label>
                        <input class="col-lg-9" type="text" name="Particularite" id="Particularite" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="dateemprunt">Date Emprunt :</label>
                        <input style="width:130px;height:34px;font-size:20;" type="date" name="dateemprunt" id="dateemprunt"><br><br><br>
                        <label for="dateecheance">Date d'échéance :</label>
                        <input style="width:130px;height:34px;font-size:20;" type="date" name="dateecheance" id="dateecheance"><br><br>
                        <label for="duree">Durée (mois) :</label>
                        <input class="col-lg-9" type="text" name="duree" id="duree" pattern="[A-Za-zÀ-ÿ,. 0-9]{1,}">
                        <label for="banque">Banque :</label>
                        <input class="col-lg-9" type="text" name="banque" id="banque" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="commun">Commun</label><br><br><br><br><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="commun" id="commun" />
                        <label for="commun"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.1">Invest.1</label><br><br><br><br><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="Invest.1" id="Invest.1" />
                        <label for="Invest.1"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.2">Invest.2</label><br><br><br><br><br><br><br><br><br><br><br><br>
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
    <div class="text border ">
    <br>
   <div class="form-inline">      
   <legend >&emsp;&emsp;TOTAL MENSUALITES (€/Mois) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TOTAL CRD (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;</legend>
    </div>
    </div>
</fieldset>
<br>

<div class="text-right">
	<div class="btn-group" role="group" aria-label="Basic example">
        <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
		<a class="btnR" href="formulaire13.php" role="button">Retour</a>&emsp;
		<button type="submit" class="btnS" >Suivant</button>
	</div>
</div>
<br>

</form>

</body>
<!-- ############################################################################################################################# -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
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
