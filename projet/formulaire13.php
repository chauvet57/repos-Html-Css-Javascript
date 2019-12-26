<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 6</title>


<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body >
 
<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire14.php" methode="POST">
    <fieldset>
	<div class="text-center border ">           
		<legend>
        <div class="text-right">
            <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
        <h1>PATRIMOINE PROFESSIONNEL</h1> (Biens détenus personnellement : Fonds de commerce,clientèle,parts ou actions de la société dans laquelle s'exerce l'activité ...)</legend><br>
		<div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:62%;">
                                        </div>
                                        <div class="progress-value"><span>62</span>%</div>
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
                        <label ></label>
                        
                    </div> 
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="valeurActu">Valeur Actuelle (€) :</label>
                        <input class="col-lg-9" type="text" name="valeurActu" id="valeurActu" pattern="[0-9,. ]{1,}">
                        <label for="precisions">Précisions :</label>
                        <input class="col-lg-9" type="text" name="precisions" id="precisions" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="acquiLe">Acquis le :</label>
                        <input style="width:130px;height:34px;font-size:20;" type="date" name="acquiLe" id="acquiLe"><br><br>
                        </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="commun">Commun</label><br><br><br><br>
                        <input type="checkbox" name="commun" id="commun" />
                        <label for="commun"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.1">Invest.1</label><br><br><br><br>
                        <input type="checkbox" name="Invest.1" id="Invest.1" />
                        <label for="Invest.1"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.2">Invest.2</label><br><br><br><br>
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
 
  </div>

</div>
</fieldset>
<br>
<fieldset>
    <div class="text border ">
    <br>
   <div class="form-inline">      
   <legend >&emsp;TOTAL PATRIMOINE PROFESSIONNEL BRUT (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;&emsp;&emsp;TOTAL PATRIMOINE PROFESSIONNEL NET (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;</legend>
    </div>
    </div>
</fieldset>
<br>
<br>


<fieldset>
	<div class="text-center border ">           
		<legend><h1>AUTRES BIENS</h1> (Objets d'art,voitures de collection,bateau ...)</legend><br>
	</div>
</fieldset>
<br>
<fieldset>
<div class="container-fluide border" id="dynamic_form2" >
<br>

        <div class="row">
                <div class="col-lg-3">
                    <div class="text-center">
                        <label ></label>
                        
                    </div> 
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="valeurActu2">Valeur Actuelle (€) :</label>
                        <input class="col-lg-9" type="text" name="valeurActu2" id="valeurActu2" pattern="[0-9,. ]{1,}">
                        <label for="precisions2">Précisions :</label>
                        <input class="col-lg-9" type="text" name="precisions2" id="precisions2" pattern="[A-Za-zÀ-ÿ,. ]{1,}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <label for="acquiLe2">Acquis le :</label>
                        <input style="width:130px;height:34px;font-size:20;" type="date" name="acquiLe2" id="acquiLe2"><br><br>
                        </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="commun2">Commun</label><br><br><br><br>
                        <input type="checkbox" name="commun2" id="commun2" />
                        <label for="commun2"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.1.2">Invest.1</label><br><br><br><br>
                        <input type="checkbox" name="Invest.1.2" id="Invest.1.2" />
                        <label for="Invest.1.2"></label>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="text-center">
                        <label for="Invest.2.2">Invest.2</label><br><br><br><br>
                        <input type="checkbox" name="Invest.2" id="Invest.2.2" />
                        <label for="Invest.2.2"></label>
                    </div>
                </div>
        </div>
      
 
  <div class="button-group">&emsp;
    <button class="btnW" id="plus2">Ajouter</button>
        <div class="text-right">
            <a  class="btnA" id="minus2">Supprimer</a>&emsp;
        </div>
  <br>

  </div>

</div>
</fieldset>
<br>
<fieldset>
    <div class="text border ">
    <br>
        <div class="form-inline">      
            <legend >&emsp;TOTAL PATRIMOINE AUTRE BRUT (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TOTAL PATRIMOINE AUTRE NET (€) :&emsp;<input class="col-lg-2" type="text" name="#" id="#" pattern="[0-9,. ]{1,}">&emsp;</legend>
        </div>
    </div>
</fieldset>
<br>
<div class="text-right">
	<div class="btn-group" role="group" aria-label="Basic example">
        <a class="btnA" href="liste_client" role="button">Annuler</a>&emsp;
		<a class="btnR" href="formulaire12.php" role="button">Retour</a>&emsp;
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


<script>

var dynamic_form2 =  $("#dynamic_form2").dynamicForm("#dynamic_form2","#plus2", "#minus2", {
});

</script>

<script>

var dynamic_form2 =  $("#dynamic_form2").dynamicForm("#dynamic_form2","#plus2", "#minus2", {
limit: 10,
formPrefix:
normalizeFullForm: false,
createColor: '',
removeColor： '',
duration: 3000,
data: {}

});

</script>