<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 5</title>

<?php
include "menu.php";
include "includes/header.php";
?>
    

</head>

<body>
 
<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire13.php" methode="POST">
    <fieldset>
	<div class="text-center border ">           
		<legend>
        <div class="text-right">
            <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
        <h1>PATRIMOINE FINANCIER</h1> (PEL,CEL,LDD,Livrets d'épargne,Compte titres,PEP,PEA,Assurance vie,PERP,Madelin,PEE,PERCO,Contrat de capitalisation,FCPI,FIP,SCPI...)</legend><br>
		<div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:50%;">
                                        </div>
                                        <div class="progress-value"><span>50</span>%</div>
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
                        <label for="type">Type :</label>
                        <select style="width:240px;height:35px" name="" id="">
                            <option>PEL</option>
                            <option>CEL</option>
                            <option>LDD</option>
                            <option>Livrets d'épargne</option>
                            <option>Compte titres</option>
                            <option>PEP</option>
                            <option>PEA</option>
                            <option>Assurance vie</option>
                            <option>PERP</option>
                            <option>Madelin</option>
                            <option>PEE</option>
                            <option>PERCO</option>
                            <option>Contrat de capitalisation</option>
                            <option>FCPI</option>
                            <option>FIP</option>
                            <option>SCPI</option>
                        </select>
                    </div> 
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="valeurActu">Valeur Actuelle (€) :</label>
                        <input class="col-lg-9" type="text" name="valeurActu" id="valeurActu" pattern="[0-9,. ]{1,}">
                        <label for="versementAnnu">Versement Annuel (€) :</label>
                        <input class="col-lg-9" type="text" name="versementAnnu" id="versementAnnu" pattern="[0-9,. ]{1,}">
                        <label for="organisme">Organisme :</label>
                        <input class="col-lg-9" type="text" name="organisme" id="organisme" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                        <label for="Particularite">Particularités :</label>
                        <input class="col-lg-9" type="text" name="Particularite" id="Particularite" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="soucritle">Soucrit le :</label>
                        <input style="width:130px;height:34px;font-size:20;" type="date" name="soucritle" id="soucritle"><br><br>
                        <label for="montantVerse">Montant Versement Programmé (€) :</label>
                        <input class="col-lg-9" type="text" name="montantVerse" id="montantVerse" pattern="[0-9,. ]{1,}">
                        <label for="periodiciteVP">Periodicité VP :</label>
                        <input class="col-lg-9" type="text" name="periodiciteVP" id="periodiciteVP" pattern="[A-Za-zÀ-ÿ,. 0-9]{1,}">
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="commun">Commun</label><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="commun" id="commun" />
                        <label for="commun"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.1">Invest.1</label><br><br><br><br><br><br><br><br>
                        <input type="checkbox" name="Invest.1" id="Invest.1" />
                        <label for="Invest.1"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.2">Invest.2</label><br><br><br><br><br><br><br><br>
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
   <legend >&emsp;&emsp;TOTAL PATRIMOINE FINANCIER BRUT (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TOTAL PATRIMOINE FINANCIER NET (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;</legend>
    </div>
    </div>
</fieldset>
<br>

<div class="text-right">
	<div class="btn-group" role="group" aria-label="Basic example">
        <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
		<a class="btnR" href="formulaire11.php" role="button">Retour</a>&emsp;
		<a class="btnS" href="formulaire13.php" role="button">Suivant</a>
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
